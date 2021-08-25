<?php


namespace Commercetools\IntegrationTest\migration;

use Commercetools\Core\Builder\Request\RequestBuilder;

class TimeoutSetting extends MigrationService implements MigrationInterface
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function v1()
    {
        $options = ['timeout' => '45'];
        $request = RequestBuilder::of()->categories()->query();
        $response = $this->executeV1($this->clientV1(), $request, $options);

        return $response;
    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function v2()
    {
        $options = ['timeout' => '45'];
        $builder = $this->builderV2();
        $request = $builder->with()->categories()->get();
        $respose = $request->execute($options);

        return $respose;
    }
}
