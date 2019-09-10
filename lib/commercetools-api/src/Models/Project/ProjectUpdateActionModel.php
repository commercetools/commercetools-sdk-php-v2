<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProjectUpdateActionModel extends JsonObjectModel implements ProjectUpdateAction
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ProjectUpdateAction> >
     */
    private static $discriminatorClasses = [
        'changeCountries' => ProjectChangeCountriesActionModel::class,
        'changeCurrencies' => ProjectChangeCurrenciesActionModel::class,
        'changeLanguages' => ProjectChangeLanguagesActionModel::class,
        'changeMessagesConfiguration' => ProjectChangeMessagesConfigurationActionModel::class,
        'changeMessagesEnabled' => ProjectChangeMessagesEnabledActionModel::class,
        'changeName' => ProjectChangeNameActionModel::class,
        'setExternalOAuth' => ProjectSetExternalOAuthActionModel::class,
        'setShippingRateInputType' => ProjectSetShippingRateInputTypeActionModel::class,
    ];

    public function __construct(
        string $action = null
    ) {
        $this->action = $action;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProjectUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ProjectUpdateAction>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ProjectUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<ProjectUpdateAction> */
        $type = ProjectUpdateActionModel::class;

        return $type;
    }
}
