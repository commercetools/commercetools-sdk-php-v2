<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerFirstNameSetMessagePayload>
 */
final class CustomerFirstNameSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $firstName;

    /**
     * <p>The <code>firstName</code> that was set during the <a href="ctp:api:type:CustomerSetFirstNameAction">Set First Name</a> update action.</p>
     *

     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param ?string $firstName
     * @return $this
     */
    public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }


    public function build(): CustomerFirstNameSetMessagePayload
    {
        return new CustomerFirstNameSetMessagePayloadModel(
            $this->firstName
        );
    }

    public static function of(): CustomerFirstNameSetMessagePayloadBuilder
    {
        return new self();
    }
}
