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
 * @implements Builder<Change>
 */
final class ChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**
     * <p><a href="#type-of-change">Type of change</a> on a resource that is similar to the update action it relates to, where possible.
     * It is not a unique identifier for the data structure, for example, the <code>setDescription</code> change can occur with a localized and non-localized representation.</p>
     * <p><a href="ctp:history:type:Record">Records</a> can be filtered by this value using the <code>changes</code> query parameter.</p>
     *

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


    public function build(): Change
    {
        return new ChangeModel(
            $this->change
        );
    }

    public static function of(): ChangeBuilder
    {
        return new self();
    }
}
