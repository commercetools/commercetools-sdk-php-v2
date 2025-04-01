<?php

namespace Commercetools\IntegrationTest\Api\Customer;

use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\Customer\CustomerPagedQueryResponse;
use Commercetools\Api\Models\Customer\CustomerRemoveAddressActionModel;
use Commercetools\Api\Models\Customer\CustomerSignInResult;
use Commercetools\Api\Models\Customer\CustomerUpdateActionCollection;
use Commercetools\Api\Models\Customer\CustomerUpdateBuilder;
use Commercetools\IntegrationTest\ApiTestCase;

class CustomerUpdateTest extends ApiTestCase
{
    public function testRemoveAddress()
    {
        $builder = $this->getApiBuilder();

        CustomerFixture::withUpdatableCustomer(
            $builder,
            function (CustomerSignInResult $customerSignIn) use ($builder) {
                $addressId = $customerSignIn->getCustomer()->getAddresses()->current()->getId();
                $updateAction = new CustomerRemoveAddressActionModel();
                $updateAction->setAddressId($addressId);
                $updateActionCollection = new CustomerUpdateActionCollection();
                $updateActionCollection->add($updateAction);
                $customerUpdate = CustomerUpdateBuilder::of()
                    ->withVersion($customerSignIn->getCustomer()->getVersion())
                    ->withActions($updateActionCollection)
                    ->build();
                $request = $builder
                    ->with()
                    ->customers()
                    ->withId($customerSignIn->getCustomer()->getId())
                    ->post($customerUpdate);
                $customerQueryResponse = $request->execute();

                $this->assertInstanceOf(Customer::class, $customerQueryResponse);
                $this->assertNotSame($customerSignIn->getCustomer()->getVersion(), $customerQueryResponse->getVersion());

                return $customerQueryResponse;
            }
        );
    }
}
