<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSetTitleAction>
 */
final class CustomerSetTitleActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $title;

    /**

     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param ?string $title
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }


    public function build(): CustomerSetTitleAction
    {
        return new CustomerSetTitleActionModel(
            $this->title
        );
    }

    public static function of(): CustomerSetTitleActionBuilder
    {
        return new self();
    }
}
