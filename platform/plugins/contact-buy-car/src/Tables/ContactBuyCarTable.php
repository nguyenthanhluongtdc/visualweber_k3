<?php

namespace Platform\ContactBuyCar\Tables;

use Illuminate\Support\Facades\Auth;
use BaseHelper;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\ContactBuyCar\Repositories\Interfaces\ContactBuyCarInterface;
use Platform\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Html;

class ContactBuyCarTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * ContactBuyCarTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param ContactBuyCarInterface $contactBuyCarRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, ContactBuyCarInterface $contactBuyCarRepository)
    {
        parent::__construct($table, $urlGenerator);

        $this->repository = $contactBuyCarRepository;

        if (!Auth::user()->hasAnyPermission(['contact-buy-car.edit', 'contact-buy-car.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('id', function ($item) {
                if (!Auth::user()->hasPermission('contact-buy-car.edit')) {
                    return $item->id;
                }
                return Html::link(route('contact-buy-car.edit', $item->id), $item->id);
            })
            ->editColumn('fullname', function ($item) {
                if (!Auth::user()->hasPermission('contact-buy-car.edit')) {
                    return $item->fullname;
                }
                return Html::link(route('contact-buy-car.edit', $item->id), $item->fullname);
            })
            ->editColumn('showroom', function ($item) {
                return get_showroom_by_id($item->showroom)->name ?? "N/A";
            })
            ->editColumn('total_price', function ($item) {
                return number_format($item->total_price,2,',','.') ?? "N/A";
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            })
            ->addColumn('operations', function ($item) {
                return $this->getOperations('contact-buy-car.edit', 'contact-buy-car.destroy', $item);
            });

        return $this->toJson($data);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        $query = $this->repository->getModel()
            ->select([
               'id',
               'status',
                'fullname',
                'total_price',
                'showroom',
                'buy_date',
                'phone',
                'email',
                'address',
                'province',
                'disctrict',
                'ward',
                'status',
                'car_type',
                'created_at',
                'car_color'
           ]);

        return $this->applyScopes($query);
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
            'id' => [
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'fullname' => [
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'email' => [
                'title' => trans('Email'),
                'class' => 'text-left',
            ],
            'phone' => [
                'title' => trans('Số điện thoại'),
                'class' => 'text-left',
            ],
            'address' => [
                'title' => trans('Địa chỉ'),
                'class' => 'text-left',
            ],
            'showroom' => [
                'title' => trans('Showroom'),
                'class' => 'text-left',
            ],
            'car_type' => [
                'title' => trans('Loại xe'),
                'class' => 'text-left',
            ],
            'car_color' => [
                'title' => trans('Màu xe'),
                'class' => 'text-left',
            ],
            'buy_date' => [
                'title' => trans('Ngày nhận xe'),
                'class' => 'text-left',
            ],
            'total_price' => [
                'title' => trans('Giá xe'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            // 'status' => [
            //     'title' => trans('core/base::tables.status'),
            //     'width' => '100px',
            // ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('contact-buy-car.deletes'), 'contact-buy-car.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'fullname' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getFilters(): array
    {
        return $this->getBulkChanges();
    }
    /**
     * {@inheritDoc}
     */
    public function getDefaultButtons(): array
    {
        return [
            'export',
            'reload',
        ];
    }
}
