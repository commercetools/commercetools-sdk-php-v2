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
use Commercetools\History\Models\ChangeValue\TransactionChangeValue;
use Commercetools\History\Models\ChangeValue\TransactionChangeValueBuilder;

/**
 * @implements Builder<SetTransactionCustomFieldChange>
 */
final class SetTransactionCustomFieldChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|TransactionChangeValue|TransactionChangeValueBuilder
     */
    private $transaction;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $customTypeId;

    /**

     * @var null|mixed|mixed
     */
    private $previousValue;

    /**

     * @var null|mixed|mixed
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Holds information about the updated Transaction.</p>
     *

     * @return null|TransactionChangeValue
     */
    public function getTransaction()
    {
        return $this->transaction instanceof TransactionChangeValueBuilder ? $this->transaction->build() : $this->transaction;
    }

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p><code>id</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|string
     */
    public function getCustomTypeId()
    {
        return $this->customTypeId;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|mixed
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|mixed
     */
    public function getNextValue()
    {
        return $this->nextValue;
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

    /**
     * @param ?TransactionChangeValue $transaction
     * @return $this
     */
    public function withTransaction(?TransactionChangeValue $transaction)
    {
        $this->transaction = $transaction;

        return $this;
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

    /**
     * @param ?string $customTypeId
     * @return $this
     */
    public function withCustomTypeId(?string $customTypeId)
    {
        $this->customTypeId = $customTypeId;

        return $this;
    }

    /**
     * @param mixed $previousValue
     * @return $this
     */
    public function withPreviousValue( $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param mixed $nextValue
     * @return $this
     */
    public function withNextValue( $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withTransaction() instead
     * @return $this
     */
    public function withTransactionBuilder(?TransactionChangeValueBuilder $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function build(): SetTransactionCustomFieldChange
    {
        return new SetTransactionCustomFieldChangeModel(
            $this->change,
            $this->transaction instanceof TransactionChangeValueBuilder ? $this->transaction->build() : $this->transaction,
            $this->name,
            $this->customTypeId,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetTransactionCustomFieldChangeBuilder
    {
        return new self();
    }
}
