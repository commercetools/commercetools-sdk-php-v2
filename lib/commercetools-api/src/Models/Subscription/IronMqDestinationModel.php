<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class IronMqDestinationModel extends JsonObjectModel implements IronMqDestination
{
    public const DISCRIMINATOR_VALUE = 'IronMQ';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $uri;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $uri = null,
        ?string $type = null
    ) {
        $this->uri = $uri;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     *
     * @return null|string
     */
    public function getUri()
    {
        if (is_null($this->uri)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_URI);
            if (is_null($data)) {
                return null;
            }
            $this->uri = (string) $data;
        }

        return $this->uri;
    }


    /**
     * @param ?string $uri
     */
    public function setUri(?string $uri): void
    {
        $this->uri = $uri;
    }
}
