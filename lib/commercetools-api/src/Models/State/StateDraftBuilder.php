<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StateDraft>
 */
final class StateDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**
     * @var ?bool
     */
    private $initial;

    /**
     * @var ?array
     */
    private $roles;

    /**
     * @var ?StateResourceIdentifierCollection
     */
    private $transitions;

    /**
     * <p>User-defined unique identifier for the State.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Specify to which resource or object type the State is assigned to.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>Name of the State.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Description of the State.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Set to <code>false</code> if the State is not the first step in a workflow.</p>
     *
     * @return null|bool
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * <p>If suitable, assign predifined roles the State can fulfill in case the State's <code>type</code> is <code>LineItemState</code> or <code>ReviewState</code>.</p>
     *
     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * <p>Define the list of States of the same <code>type</code> to which the current State can be transitioned to.</p>
     * <ul>
     * <li>If, for example, the current State is the <em>Initial</em> State of <a href="ctp:api:type:StateTypeEnum">StateType</a> <code>OrderState</code> and you want to allow the transition <em>Initial</em> -&gt; <em>Shipped</em>, then add the <a href="ctp:api:type:StateResourceIdentifier">StateResourceIdentifier</a> to the <em>Shipped</em> <code>OrderState</code> to this list.</li>
     * <li>Set to empty list for not allowing any transition from the current State and defining it as final State for a workflow.</li>
     * <li>Do not set this field at all to turn off validation and allowing transitions to any other State of the same <code>type</code> as the current State.</li>
     * </ul>
     *
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions()
    {
        return $this->transitions;
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
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?bool $initial
     * @return $this
     */
    public function withInitial(?bool $initial)
    {
        $this->initial = $initial;

        return $this;
    }

    /**
     * @param ?array $roles
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @param ?StateResourceIdentifierCollection $transitions
     * @return $this
     */
    public function withTransitions(?StateResourceIdentifierCollection $transitions)
    {
        $this->transitions = $transitions;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    public function build(): StateDraft
    {
        return new StateDraftModel(
            $this->key,
            $this->type,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->initial,
            $this->roles,
            $this->transitions
        );
    }

    public static function of(): StateDraftBuilder
    {
        return new self();
    }
}
