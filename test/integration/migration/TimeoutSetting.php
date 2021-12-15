<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Core\Builder\Request\RequestBuilder;

class TimeoutSetting extends MigrationService implements MigrationInterface
{
    public function v1()
    {
        $client = $this->clientV1();

        $request = RequestBuilder::of()->categories()->query();
        $response = $client->execute($request, null, ['timeout' => '45']);

        return $request->mapFromResponse($response);
    }

    public function v2()
    {
        $options = ['timeout' => '45'];
        $builder = $this->builderV2();
        $request = $builder->with()->categories()->get();
        $response = $request->execute($options);

        return $response;
    }
}
