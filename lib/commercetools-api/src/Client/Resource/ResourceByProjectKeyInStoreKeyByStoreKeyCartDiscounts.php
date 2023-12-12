<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\CartDiscount\CartDiscountDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscounts extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/cart-discounts', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CartDiscountDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CartDiscountDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
