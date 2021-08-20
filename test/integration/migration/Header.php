<?php


namespace Commercetools\IntegrationTest\migration;



use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\CategoryDraft;

class Header extends MigrationService implements MigrationInterface
{

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function v1()
    {
        $client = $this->clientV1();
        /** @var CategoryDraft $categoryDraft */
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $headers = ["foo" => "bar"];
        $response = $this->executeV1($client, $request, $headers);
        $result = $request->mapFromResponse($response);

        return $result;

    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function v2()
    {
        $builder = $this->builderV2();
        $request = $builder->with()->categories()->get()->withHeader("foo", "bar");

        return $request->execute();
    }
}
