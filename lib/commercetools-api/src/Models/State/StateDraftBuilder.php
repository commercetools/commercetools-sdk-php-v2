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
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $name;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
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
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * @return null|bool
     */
    public function getInitial()
    {
        return $this->initial;
    }

    /**
     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions()
    {
        return $this->transitions;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInitial(?bool $initial)
    {
        $this->initial = $initial;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTransitions(?StateResourceIdentifierCollection $transitions)
    {
        $this->transitions = $transitions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
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
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
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
