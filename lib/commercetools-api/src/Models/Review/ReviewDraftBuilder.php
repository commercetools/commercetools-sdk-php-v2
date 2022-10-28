<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewDraft>
 */
final class ReviewDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $uniquenessValue;

    /**

     * @var ?string
     */
    private $locale;

    /**

     * @var ?string
     */
    private $authorName;

    /**

     * @var ?string
     */
    private $title;

    /**

     * @var ?string
     */
    private $text;

    /**

     * @var ?JsonObject
     */
    private $target;

    /**

     * @var null|StateResourceIdentifier|StateResourceIdentifierBuilder
     */
    private $state;

    /**

     * @var ?int
     */
    private $rating;

    /**

     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>User-defined unique identifier for the Review.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>If set, this value must be unique among Reviews.
     * For example, if you want to have only one Review per Customer and per Product, you can set the value to Customer <code>id</code> + Product <code>id</code>.</p>
     *

     * @return null|string
     */
    public function getUniquenessValue()
    {
        return $this->uniquenessValue;
    }

    /**
     * <p>Language in which the content of the Review is written.</p>
     *

     * @return null|string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * <p>Name of the author.</p>
     *

     * @return null|string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * <p>Title of the Review.</p>
     *

     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * <p>Content of the Review.</p>
     *

     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * <p>Identifies the target of the Review. Can be a <a href="ctp:api:type:Product">Product</a> or a <a href="ctp:api:type:Channel">Channel</a>, specified as <a href="ctp:api:type:ProductResourceIdentifier">ProductResourceIdentifier</a> or <a href="ctp:api:type:ChannelResourceIdentifier">ChannelResourceIdentifier</a>, respectively.</p>
     *

     * @return null|JsonObject
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * <p>State of the Review. Used for approval processes, see <a href="/../tutorials/review-ratings#review-approval-process">Review approval process</a> for details.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        return $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Rating of the targeted Product or Channel.
     * This rating can represent the number of stars, a percentage, or a like (+1)/dislike (-1).
     * A rating is used in the ratings statistics of the targeted object, unless the Review is in a State that does not have the role <code>ReviewIncludedInStatistics</code>.</p>
     *

     * @return null|int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * <p>Customer who created the Review.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Custom Fields for the Review.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $uniquenessValue
     * @return $this
     */
    public function withUniquenessValue(?string $uniquenessValue)
    {
        $this->uniquenessValue = $uniquenessValue;

        return $this;
    }

    /**
     * @param ?string $locale
     * @return $this
     */
    public function withLocale(?string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param ?string $authorName
     * @return $this
     */
    public function withAuthorName(?string $authorName)
    {
        $this->authorName = $authorName;

        return $this;
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

    /**
     * @param ?string $text
     * @return $this
     */
    public function withText(?string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @param ?JsonObject $target
     * @return $this
     */
    public function withTarget(?JsonObject $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @param ?StateResourceIdentifier $state
     * @return $this
     */
    public function withState(?StateResourceIdentifier $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?int $rating
     * @return $this
     */
    public function withRating(?int $rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     * @return $this
     */
    public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): ReviewDraft
    {
        return new ReviewDraftModel(
            $this->key,
            $this->uniquenessValue,
            $this->locale,
            $this->authorName,
            $this->title,
            $this->text,
            $this->target,
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state,
            $this->rating,
            $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): ReviewDraftBuilder
    {
        return new self();
    }
}
