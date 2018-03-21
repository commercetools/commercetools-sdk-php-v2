<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Test\Client;

use Commercetools\Client\CredentialTokenProvider;
use Commercetools\Client\Token;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class CredentialTokenProviderTest extends TestCase
{

    public function testGetToken()
    {
        $client = $this->prophesize(Client::class);
        $requestBody = [
            'form_params' => ['grant_type' => 'client_credentials'],
            'auth' => ['foo', 'bar']
        ];
        $responseBody = $this->prophesize(ResponseInterface::class);
        $responseBody->getBody()->willReturn('{"access_token": "tokenValue", "expires_in": 1}')->shouldBeCalled();
        $client->post('tokenUrl', $requestBody)->willReturn($responseBody->reveal())->shouldBeCalled();

        $provider = new CredentialTokenProvider($client->reveal(), 'tokenUrl', ['clientId' => 'foo', 'clientSecret' => 'bar']);

        $token = $provider->getToken();

        $this->assertInstanceOf(Token::class, $token);
        $this->assertSame('tokenValue', $token->getValue());
        $this->assertSame(1, $token->getExpiresIn());
    }
}
