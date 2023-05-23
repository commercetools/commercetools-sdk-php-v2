<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitChangeAssociateModeActionModel extends JsonObjectModel implements BusinessUnitChangeAssociateModeAction
{
    public const DISCRIMINATOR_VALUE = 'changeAssociateMode';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $associateMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $associateMode = null,
        ?string $action = null
    ) {
        $this->associateMode = $associateMode;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>The new value for <code>associateMode</code>.</p>
     *
     *
     * @return null|string
     */
    public function getAssociateMode()
    {
        if (is_null($this->associateMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->associateMode = (string) $data;
        }

        return $this->associateMode;
    }


    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void
    {
        $this->associateMode = $associateMode;
    }
}
