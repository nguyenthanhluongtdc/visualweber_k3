<?php

namespace Platform\Contact\Http\Controllers;

use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Contact\Events\SentContactEvent;
use Platform\Contact\Http\Requests\ContactRequest;
use Platform\Contact\Repositories\Interfaces\ContactInterface;
use EmailHandler;
use Exception;
use Illuminate\Routing\Controller;

class PublicController extends Controller
{
    /**
     * @var ContactInterface
     */
    protected $contactRepository;

    /**
     * @param ContactInterface $contactRepository
     */
    public function __construct(ContactInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @param ContactRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws \Throwable
     */
    public function postSendContact(ContactRequest $request, BaseHttpResponse $response)
    {        
        try {
            $city = get_city_by_id($request->city)->name;
            $showroom = get_showroom_by_id($request->showroom)->name;
            $district = get_district_by_id($request->district)->name;
            $ward = get_ward_by_id($request->ward)->name;

            $contact = $this->contactRepository->getModel();
            $contact->fill($request->input());
            $contact['email'] = $contact->email ?? "";
            $contact['content'] = $contact->content ?? "";
            $contact['city'] = $city ?? "";
            $contact['showroom'] = $showroom ?? "";
            $contact['district'] = $district ?? "";
            $contact['ward'] = $ward ?? "";
            $this->contactRepository->createOrUpdate($contact);
            event(new SentContactEvent($contact));
            EmailHandler::setModule(CONTACT_MODULE_SCREEN_NAME)
                ->setVariableValues([
                    'contact_name'    => $contact->name ?? 'N/A',
                    'contact_subject' => $contact->subject ?? 'N/A',
                    'contact_email'   => $contact->email ?? 'N/A',
                    'contact_phone'   => $contact->phone ?? 'N/A',
                    'contact_city'   => $contact->city ?? 'N/A',
                    'contact_address' => $contact->address ?? 'N/A',
                    'contact_content' => $contact->content ?? 'N/A',
                    'contact_showroom' => $contact->showroom ?? 'N/A',
                    'contact_district' => $contact->district ?? 'N/A',
                    'contact_ward' => $contact->ward ?? 'N/A',
                ])
                ->sendUsingTemplate('notice');
                return redirect()->back()->with([
                    'type' => 'success',
                    'message' => __('Send message successfully!')
                ]);
            
            return $response->setMessage(__('Send message successfully!'));
        } catch (Exception $exception) {
            info($exception->getMessage());
            return $response
                ->setError()
                ->setMessage(__('Can\'t send message on this time, please try again later!'));
        }
    }
}
