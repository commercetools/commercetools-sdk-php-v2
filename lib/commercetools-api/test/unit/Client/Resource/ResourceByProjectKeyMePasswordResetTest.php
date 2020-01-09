<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePasswordResetPost
 *
 * @internal
 */
class ResourceByProjectKeyMePasswordResetTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMePasswordResetPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->password()
                        ->reset()
                        ->post()
                    ;
                },
                'post',
                '{projectKey}/me/password/reset',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        }
    }
}
