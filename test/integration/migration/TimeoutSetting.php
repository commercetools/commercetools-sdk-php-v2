<?php

namespace Commercetools\IntegrationTest\migration;

use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Exception\InvalidArgumentException;

class TimeoutSetting extends MigrationService implements MigrationInterface
{
    public const CLIENT_ID = 'my_client_id';
    public const CLIENT_SECRET = 'my_client_secret';
    public const PROJECT_KEY = 'my_project_key';

    public function v1()
    {
        $client = $this->clientV1();

        $request = RequestBuilder::of()->categories()->query();
        $response = $client->execute($request, null, ['timeout' => '45']);

        return $request->mapFromResponse($response);
    }

    public function v2()
    {
        $service = new MigrationService(self::CLIENT_ID, self::CLIENT_SECRET, self::PROJECT_KEY);
        $options = ['timeout' => '45'];
        $request = $service->builderV2()->with()->categories()->get();
        $response = $request->execute($options);

        return $response;
    }
}
