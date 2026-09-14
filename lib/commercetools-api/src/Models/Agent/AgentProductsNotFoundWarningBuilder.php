<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObject;
use Commercetools\Api\Models\Warning\WarningObjectBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AgentProductsNotFoundWarning>
 */
final class AgentProductsNotFoundWarningBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?array
     */
    private $products;

    /**
     * <p>Plain text description of the unmatched Products.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Identifiers of the Products that could not be matched to the catalog, as they appeared in the input.</p>
     *

     * @return null|array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?array $products
     * @return $this
     */
    public function withProducts(?array $products)
    {
        $this->products = $products;

        return $this;
    }


    public function build(): AgentProductsNotFoundWarning
    {
        return new AgentProductsNotFoundWarningModel(
            $this->message,
            $this->products
        );
    }

    public static function of(): AgentProductsNotFoundWarningBuilder
    {
        return new self();
    }
}
