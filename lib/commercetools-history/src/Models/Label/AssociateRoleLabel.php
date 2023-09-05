<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AssociateRoleLabel extends Label
{

    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:AssociateRole">Associate Role</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Associate Role.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;
}
