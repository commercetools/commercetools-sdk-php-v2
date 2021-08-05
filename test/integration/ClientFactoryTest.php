<?php


namespace Commercetools\IntegrationTest;


use Commercetools\Api\Models\Category\Category;
use Commercetools\Api\Models\Category\CategoryPagedQueryResponse;
use Commercetools\Client\UserAgentProvider;
use Commercetools\IntegrationTest\Api\Category\CategoryFixture;

class ClientFactoryTest extends ApiTestCase
{
    public function testUserAgent()
    {
        $builder = $this->getApiBuilder();

        CategoryFixture::withCategory(
            $builder,
            function (Category $category) use ($builder) {
                $request = $builder->with()->categories()->get();
                $categoryQueryResponse = $request->execute();

                $this->assertInstanceOf(CategoryPagedQueryResponse::class, $categoryQueryResponse);

                $categoryQueryResponse->getResults()->toArray();

                $this->assertStringContainsString(UserAgentProvider::USER_AGENT, (new UserAgentProvider())->getUserAgent());

            }
        );

    }


}
