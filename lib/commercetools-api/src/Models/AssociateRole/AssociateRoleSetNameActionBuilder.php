<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleSetNameAction>
 */
final class AssociateRoleSetNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**
     * <p>New name to set.
     * If <code>name</code> is absent or <code>null</code>, the existing name, if any, will be removed.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }


    public function build(): AssociateRoleSetNameAction
    {
        return new AssociateRoleSetNameActionModel(
            $this->name
        );
    }

    public static function of(): AssociateRoleSetNameActionBuilder
    {
        return new self();
    }
}
