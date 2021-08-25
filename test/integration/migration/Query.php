<?php


namespace Commercetools\IntegrationTest\migration;

use Commercetools\Core\Builder\Request\RequestBuilder;

class Query extends MigrationService implements MigrationInterface
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function v1()
    {
        $client = $this->clientV1();

        $request = RequestBuilder::of()->categories()->query()->where('id = :id');
        $response = $this->executeV1($client, $request);
        $result = $request->mapFromResponse($response);

        return $result;
    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function v2()
    {
        $builder = $this->builderV2();
        $request = $builder->with()->categories()->get()->withWhere('id = :id')->withPredicateVar("id", "id123");

        return $request->execute();
    }
}
