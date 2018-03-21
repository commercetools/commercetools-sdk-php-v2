<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Base\BaseBuilder;
use Commercetools\Types\Project\ProjectUpdateAction;

use Commercetools\Types\Project\ProjectChangeCurrenciesAction;
use Commercetools\Types\Project\ProjectChangeNameAction;
use Commercetools\Types\Project\ProjectChangeCountriesAction;
use Commercetools\Types\Project\ProjectChangeMessagesEnabledAction;
use Commercetools\Types\Project\ProjectChangeLanguagesAction;
use Commercetools\Types\Project\ProjectSetShippingRateInputTypeAction;
use Commercetools\Types\Project\Project;
use Commercetools\Types\Project\ProjectUpdate;


class ProjectUpdateBuilder extends BaseBuilder {
    /**
     * @var Project
     */
    private $resource = null;

    /**
     * @var array
     */
    private $actions = [];

    /**
     * @param callable $callback builder function <code>
     *   function (ProjectChangeCurrenciesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCurrencies(callable $callback = null)
    {
        $action = $this->mapData(ProjectChangeCurrenciesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProjectChangeNameAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeName(callable $callback = null)
    {
        $action = $this->mapData(ProjectChangeNameAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProjectChangeCountriesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeCountries(callable $callback = null)
    {
        $action = $this->mapData(ProjectChangeCountriesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProjectChangeMessagesEnabledAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeMessagesEnabled(callable $callback = null)
    {
        $action = $this->mapData(ProjectChangeMessagesEnabledAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProjectChangeLanguagesAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function changeLanguages(callable $callback = null)
    {
        $action = $this->mapData(ProjectChangeLanguagesAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }
    /**
     * @param callable $callback builder function <code>
     *   function (ProjectSetShippingRateInputTypeAction $action) {
     *     // modify action as needed
     *     return $action;
     *   }
     *   </code>
     * @return $this
     */
    public function setShippingRateInputType(callable $callback = null)
    {
        $action = $this->mapData(ProjectSetShippingRateInputTypeAction::class, null);
        $this->callback($action, $callback);
        return $this;
    }

    /**
     * @param ProjectUpdateAction $action
     * @return $this;
     */
    public function addAction(ProjectUpdateAction $action)
    {
        $this->actions[] = $action;
        return $this;
    }

    /*
     * @param $action
     * @param callable $callback
     */
    private function callback($action, callable $callback = null) {
        if (!is_null($callback)) {
            $action = $callback($action);
        }
        $this->actions[] = $action;
    }

    /**
     * @param Project $project
     * @return $this
     */
    public function with(Project $project)
    {
        $this->resource = $project;
        return $this;
    }

    public function reset()
    {
        $this->actions = [];
        $this->resource = null;
    }

    /**
     * Build ProjectUpdate and delete internal state
     * @return ProjectUpdate
     */
    public function build(): ProjectUpdate
    {
        $data = [
            'actions' => $this->actions,
        ];
        $update = $this->mapData(ProjectUpdate::class, $data);
        if ($update instanceof ProjectUpdate &&
            $this->resource instanceof Project
        ) {
            $update->setVersion($this->resource->getVersion());
        }

        return $update;
    }
}
