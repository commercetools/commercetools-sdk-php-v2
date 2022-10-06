<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyBusinessUnitSetContactEmailActionModel extends JsonObjectModel implements MyBusinessUnitSetContactEmailAction
{
    public const DISCRIMINATOR_VALUE = 'setContactEmail';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $contactEmail;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $contactEmail = null,
        ?string $action = null
    ) {
        $this->contactEmail = $contactEmail;
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
     * <p>Email to set.
     * If <code>contactEmail</code> is absent or <code>null</code>, the existing contact email, if any, will be removed.</p>
     *
     *
     * @return null|string
     */
    public function getContactEmail()
    {
        if (is_null($this->contactEmail)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONTACT_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->contactEmail = (string) $data;
        }

        return $this->contactEmail;
    }


    /**
     * @param ?string $contactEmail
     */
    public function setContactEmail(?string $contactEmail): void
    {
        $this->contactEmail = $contactEmail;
    }
}
