<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StateDraftModel extends JsonObjectModel implements StateDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?bool
     */
    protected $initial;

    /**
     * @var ?array
     */
    protected $roles;

    /**
     * @var ?StateResourceIdentifierCollection
     */
    protected $transitions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $type = null,
        ?LocalizedString $name = null,
        ?LocalizedString $description = null,
        ?bool $initial = null,
        ?array $roles = null,
        ?StateResourceIdentifierCollection $transitions = null
    ) {
        $this->key = $key;
        $this->type = $type;
        $this->name = $name;
        $this->description = $description;
        $this->initial = $initial;
        $this->roles = $roles;
        $this->transitions = $transitions;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|bool
     */
    public function getInitial()
    {
        if (is_null($this->initial)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INITIAL);
            if (is_null($data)) {
                return null;
            }
            $this->initial = (bool) $data;
        }

        return $this->initial;
    }

    /**
     * @return null|array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->roles = $data;
        }

        return $this->roles;
    }

    /**
     * @return null|StateResourceIdentifierCollection
     */
    public function getTransitions()
    {
        if (is_null($this->transitions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TRANSITIONS);
            if (is_null($data)) {
                return null;
            }
            $this->transitions = StateResourceIdentifierCollection::fromArray($data);
        }

        return $this->transitions;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?bool $initial
     */
    public function setInitial(?bool $initial): void
    {
        $this->initial = $initial;
    }

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @param ?StateResourceIdentifierCollection $transitions
     */
    public function setTransitions(?StateResourceIdentifierCollection $transitions): void
    {
        $this->transitions = $transitions;
    }
}
