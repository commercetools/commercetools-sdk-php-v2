<?php

namespace Commercetools\IntegrationTest\Api\Customer;


use Commercetools\Api\Models\Customer\CustomerPagedQueryResponse;
use Commercetools\Api\Models\Customer\CustomerSignInResult;
use Commercetools\IntegrationTest\ApiTestCase;

class CustomerQueryTest extends ApiTestCase
{
    public function testQuery()
    {
        $builder = $this->getApiBuilder();

        CustomerFixture::withCustomer(
            $builder,
            function (CustomerSignInResult $customerSignIn) use ($builder) {
                $request = $builder
                    ->with()
                    ->customers()
                    ->get()
                    ->withWhere('email=:email')
                    ->withPredicateVar("email", $customerSignIn->getCustomer()->getEmail());

                $customerQueryResponse = $request->execute();

                $this->assertInstanceOf(CustomerPagedQueryResponse::class, $customerQueryResponse);
                $this->assertSame($customerSignIn->getCustomer()->getId(), $customerQueryResponse->getResults()->current()->getId());
            }
        );
    }
}
