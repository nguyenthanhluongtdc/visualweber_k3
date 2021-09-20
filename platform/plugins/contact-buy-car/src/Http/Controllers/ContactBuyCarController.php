<?php

namespace Platform\ContactBuyCar\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\ContactBuyCar\Http\Requests\ContactBuyCarRequest;
use Platform\ContactBuyCar\Repositories\Interfaces\ContactBuyCarInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\ContactBuyCar\Tables\ContactBuyCarTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\ContactBuyCar\Forms\ContactBuyCarForm;
use Platform\Base\Forms\FormBuilder;

class ContactBuyCarController extends BaseController
{
    /**
     * @var ContactBuyCarInterface
     */
    protected $contactBuyCarRepository;

    /**
     * @param ContactBuyCarInterface $contactBuyCarRepository
     */
    public function __construct(ContactBuyCarInterface $contactBuyCarRepository)
    {
        $this->contactBuyCarRepository = $contactBuyCarRepository;
    }

    /**
     * @param ContactBuyCarTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(ContactBuyCarTable $table)
    {
        page_title()->setTitle(trans('plugins/contact-buy-car::contact-buy-car.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/contact-buy-car::contact-buy-car.create'));

        return $formBuilder->create(ContactBuyCarForm::class)->renderForm();
    }

    /**
     * @param ContactBuyCarRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(ContactBuyCarRequest $request, BaseHttpResponse $response)
    {
        $contactBuyCar = $this->contactBuyCarRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(CONTACT_BUY_CAR_MODULE_SCREEN_NAME, $request, $contactBuyCar));

        return $response
            ->setPreviousUrl(route('contact-buy-car.index'))
            ->setNextUrl(route('contact-buy-car.edit', $contactBuyCar->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $contactBuyCar = $this->contactBuyCarRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $contactBuyCar));

        page_title()->setTitle(trans('plugins/contact-buy-car::contact-buy-car.edit') . ' "' . $contactBuyCar->name . '"');

        return $formBuilder->create(ContactBuyCarForm::class, ['model' => $contactBuyCar])->renderForm();
    }

    /**
     * @param int $id
     * @param ContactBuyCarRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, ContactBuyCarRequest $request, BaseHttpResponse $response)
    {
        $contactBuyCar = $this->contactBuyCarRepository->findOrFail($id);

        $contactBuyCar->fill($request->input());

        $contactBuyCar = $this->contactBuyCarRepository->createOrUpdate($contactBuyCar);

        event(new UpdatedContentEvent(CONTACT_BUY_CAR_MODULE_SCREEN_NAME, $request, $contactBuyCar));

        return $response
            ->setPreviousUrl(route('contact-buy-car.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $contactBuyCar = $this->contactBuyCarRepository->findOrFail($id);

            $this->contactBuyCarRepository->delete($contactBuyCar);

            event(new DeletedContentEvent(CONTACT_BUY_CAR_MODULE_SCREEN_NAME, $request, $contactBuyCar));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $contactBuyCar = $this->contactBuyCarRepository->findOrFail($id);
            $this->contactBuyCarRepository->delete($contactBuyCar);
            event(new DeletedContentEvent(CONTACT_BUY_CAR_MODULE_SCREEN_NAME, $request, $contactBuyCar));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
