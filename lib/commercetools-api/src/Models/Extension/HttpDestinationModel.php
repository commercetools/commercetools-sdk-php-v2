<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class HttpDestinationModel extends JsonObjectModel implements HttpDestination
{
    public const DISCRIMINATOR_VALUE = 'HTTP';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $url;

    /**
     * @var ?HttpDestinationAuthentication
     */
    protected $authentication;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $url = null,
        ?HttpDestinationAuthentication $authentication = null
    ) {
        $this->url = $url;
        $this->authentication = $authentication;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        if (is_null($this->url)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_URL);
            if (is_null($data)) {
                return null;
            }
            $this->url = (string) $data;
        }

        return $this->url;
    }

    /**
     * @return null|HttpDestinationAuthentication
     */
    public function getAuthentication()
    {
        if (is_null($this->authentication)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AUTHENTICATION);
            if (is_null($data)) {
                return null;
            }
            $className = HttpDestinationAuthenticationModel::resolveDiscriminatorClass($data);
            $this->authentication = $className::of($data);
        }

        return $this->authentication;
    }


    /**
     * @param ?string $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @param ?HttpDestinationAuthentication $authentication
     */
    public function setAuthentication(?HttpDestinationAuthentication $authentication): void
    {
        $this->authentication = $authentication;
    }
}
