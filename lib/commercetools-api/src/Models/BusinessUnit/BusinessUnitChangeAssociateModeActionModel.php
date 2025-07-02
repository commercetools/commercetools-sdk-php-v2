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
     *
     * @var ?bool
     */
    protected $makeInheritedAssociatesExplicit;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $associateMode = null,
        ?bool $makeInheritedAssociatesExplicit = null,
        ?string $action = null
    ) {
        $this->associateMode = $associateMode;
        $this->makeInheritedAssociatesExplicit = $makeInheritedAssociatesExplicit;
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
     * <p>If set to <code>true</code> during a change to <code>associateMode=&quot;Explicit&quot;</code>, all inherited Associates will be converted to explicit Associates.</p>
     *
     *
     * @return null|bool
     */
    public function getMakeInheritedAssociatesExplicit()
    {
        if (is_null($this->makeInheritedAssociatesExplicit)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_MAKE_INHERITED_ASSOCIATES_EXPLICIT);
            if (is_null($data)) {
                return null;
            }
            $this->makeInheritedAssociatesExplicit = (bool) $data;
        }

        return $this->makeInheritedAssociatesExplicit;
    }


    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void
    {
        $this->associateMode = $associateMode;
    }

    /**
     * @param ?bool $makeInheritedAssociatesExplicit
     */
    public function setMakeInheritedAssociatesExplicit(?bool $makeInheritedAssociatesExplicit): void
    {
        $this->makeInheritedAssociatesExplicit = $makeInheritedAssociatesExplicit;
    }
}
