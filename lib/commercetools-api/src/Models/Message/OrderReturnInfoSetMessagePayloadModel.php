<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfoCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderReturnInfoSetMessagePayloadModel extends JsonObjectModel implements OrderReturnInfoSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ReturnInfoSet';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?ReturnInfoCollection
     */
    protected $returnInfo;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ReturnInfoCollection $returnInfo = null
    ) {
        $this->returnInfo = $returnInfo;
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

     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo()
    {
        if (is_null($this->returnInfo)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RETURN_INFO);
            if (is_null($data)) {
                return null;
            }
            $this->returnInfo = ReturnInfoCollection::fromArray($data);
        }

        return $this->returnInfo;
    }


    /**
     * @param ?ReturnInfoCollection $returnInfo
     */
    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void
    {
        $this->returnInfo = $returnInfo;
    }
}
