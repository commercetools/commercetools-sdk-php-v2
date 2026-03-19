<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetPasswordChange>
 */
final class SetPasswordChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }


    public function build(): SetPasswordChange
    {
        return new SetPasswordChangeModel(
            $this->change
        );
    }

    public static function of(): SetPasswordChangeBuilder
    {
        return new self();
    }
}
