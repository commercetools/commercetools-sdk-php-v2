<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingMethodSetLocalizedDescriptionActionModel extends JsonObjectModel implements ShippingMethodSetLocalizedDescriptionAction
{
    public const DISCRIMINATOR_VALUE = 'setLocalizedDescription';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $localizedDescription;


    public function __construct(
        string $localizedDescription = null
    ) {
        $this->localizedDescription = $localizedDescription;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getLocalizedDescription()
    {
        if (is_null($this->localizedDescription)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LOCALIZED_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->localizedDescription = (string) $data;
        }

        return $this->localizedDescription;
    }


    public function setLocalizedDescription(?string $localizedDescription): void
    {
        $this->localizedDescription = $localizedDescription;
    }
}
