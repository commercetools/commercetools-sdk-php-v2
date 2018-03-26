<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\CategoryUpdateBuilder;
use Commercetools\Types\Category\CategoryAddAssetAction;
use Commercetools\Types\Category\CategoryChangeAssetNameAction;
use Commercetools\Types\Category\CategoryChangeAssetOrderAction;
use Commercetools\Types\Category\CategoryChangeNameAction;
use Commercetools\Types\Category\CategoryChangeOrderHintAction;
use Commercetools\Types\Category\CategoryChangeParentAction;
use Commercetools\Types\Category\CategoryChangeSlugAction;
use Commercetools\Types\Category\CategoryRemoveAssetAction;
use Commercetools\Types\Category\CategorySetAssetCustomFieldAction;
use Commercetools\Types\Category\CategorySetAssetCustomTypeAction;
use Commercetools\Types\Category\CategorySetAssetDescriptionAction;
use Commercetools\Types\Category\CategorySetAssetKeyAction;
use Commercetools\Types\Category\CategorySetAssetSourcesAction;
use Commercetools\Types\Category\CategorySetAssetTagsAction;
use Commercetools\Types\Category\CategorySetCustomFieldAction;
use Commercetools\Types\Category\CategorySetCustomTypeAction;
use Commercetools\Types\Category\CategorySetDescriptionAction;
use Commercetools\Types\Category\CategorySetExternalIdAction;
use Commercetools\Types\Category\CategorySetKeyAction;
use Commercetools\Types\Category\CategorySetMetaDescriptionAction;
use Commercetools\Types\Category\CategorySetMetaKeywordsAction;
use Commercetools\Types\Category\CategorySetMetaTitleAction;
use Commercetools\Types\Category\Category;
use Commercetools\Types\Category\CategoryUpdate;
use Commercetools\Request\ByProjectKeyCategoriesByIDPost;

use Commercetools\Types\Category\CategoryAddAssetActionModel;
use Commercetools\Types\Category\CategoryChangeAssetNameActionModel;
use Commercetools\Types\Category\CategoryChangeAssetOrderActionModel;
use Commercetools\Types\Category\CategoryChangeNameActionModel;
use Commercetools\Types\Category\CategoryChangeOrderHintActionModel;
use Commercetools\Types\Category\CategoryChangeParentActionModel;
use Commercetools\Types\Category\CategoryChangeSlugActionModel;
use Commercetools\Types\Category\CategoryRemoveAssetActionModel;
use Commercetools\Types\Category\CategorySetAssetCustomFieldActionModel;
use Commercetools\Types\Category\CategorySetAssetCustomTypeActionModel;
use Commercetools\Types\Category\CategorySetAssetDescriptionActionModel;
use Commercetools\Types\Category\CategorySetAssetKeyActionModel;
use Commercetools\Types\Category\CategorySetAssetSourcesActionModel;
use Commercetools\Types\Category\CategorySetAssetTagsActionModel;
use Commercetools\Types\Category\CategorySetCustomFieldActionModel;
use Commercetools\Types\Category\CategorySetCustomTypeActionModel;
use Commercetools\Types\Category\CategorySetDescriptionActionModel;
use Commercetools\Types\Category\CategorySetExternalIdActionModel;
use Commercetools\Types\Category\CategorySetKeyActionModel;
use Commercetools\Types\Category\CategorySetMetaDescriptionActionModel;
use Commercetools\Types\Category\CategorySetMetaKeywordsActionModel;
use Commercetools\Types\Category\CategorySetMetaTitleActionModel;

use PHPUnit\Framework\TestCase;

class CategoryBuilderTest extends TestCase {
    public function testAddAssetCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->addAsset(function($action) { static::assertInstanceOf(CategoryAddAssetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryAddAssetAction::class, $update->getActions()->current());
    }

    public function testAddAssetInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->addAsset(new CategoryAddAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryAddAssetAction::class, $update->getActions()->current());
    }

    public function testChangeAssetNameCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetName(function($action) { static::assertInstanceOf(CategoryChangeAssetNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeAssetNameAction::class, $update->getActions()->current());
    }

    public function testChangeAssetNameInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetName(new CategoryChangeAssetNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeAssetNameAction::class, $update->getActions()->current());
    }

    public function testChangeAssetOrderCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetOrder(function($action) { static::assertInstanceOf(CategoryChangeAssetOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeAssetOrderAction::class, $update->getActions()->current());
    }

    public function testChangeAssetOrderInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetOrder(new CategoryChangeAssetOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeAssetOrderAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(CategoryChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeName(new CategoryChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeOrderHintCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeOrderHint(function($action) { static::assertInstanceOf(CategoryChangeOrderHintAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeOrderHintAction::class, $update->getActions()->current());
    }

    public function testChangeOrderHintInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeOrderHint(new CategoryChangeOrderHintActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeOrderHintAction::class, $update->getActions()->current());
    }

    public function testChangeParentCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeParent(function($action) { static::assertInstanceOf(CategoryChangeParentAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeParentAction::class, $update->getActions()->current());
    }

    public function testChangeParentInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeParent(new CategoryChangeParentActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeParentAction::class, $update->getActions()->current());
    }

    public function testChangeSlugCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeSlug(function($action) { static::assertInstanceOf(CategoryChangeSlugAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeSlugAction::class, $update->getActions()->current());
    }

    public function testChangeSlugInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeSlug(new CategoryChangeSlugActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeSlugAction::class, $update->getActions()->current());
    }

    public function testRemoveAssetCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->removeAsset(function($action) { static::assertInstanceOf(CategoryRemoveAssetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryRemoveAssetAction::class, $update->getActions()->current());
    }

    public function testRemoveAssetInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->removeAsset(new CategoryRemoveAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryRemoveAssetAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomFieldCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomField(function($action) { static::assertInstanceOf(CategorySetAssetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomFieldInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomField(new CategorySetAssetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomTypeCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomType(function($action) { static::assertInstanceOf(CategorySetAssetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomTypeInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomType(new CategorySetAssetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetAssetDescriptionCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetDescription(function($action) { static::assertInstanceOf(CategorySetAssetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetAssetDescriptionInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetDescription(new CategorySetAssetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetAssetKeyCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetKey(function($action) { static::assertInstanceOf(CategorySetAssetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetKeyAction::class, $update->getActions()->current());
    }

    public function testSetAssetKeyInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetKey(new CategorySetAssetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetKeyAction::class, $update->getActions()->current());
    }

    public function testSetAssetSourcesCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetSources(function($action) { static::assertInstanceOf(CategorySetAssetSourcesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetSourcesAction::class, $update->getActions()->current());
    }

    public function testSetAssetSourcesInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetSources(new CategorySetAssetSourcesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetSourcesAction::class, $update->getActions()->current());
    }

    public function testSetAssetTagsCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetTags(function($action) { static::assertInstanceOf(CategorySetAssetTagsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetTagsAction::class, $update->getActions()->current());
    }

    public function testSetAssetTagsInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetTags(new CategorySetAssetTagsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetTagsAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(CategorySetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomField(new CategorySetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(CategorySetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomType(new CategorySetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(CategorySetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setDescription(new CategorySetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetExternalIdCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setExternalId(function($action) { static::assertInstanceOf(CategorySetExternalIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetExternalIdAction::class, $update->getActions()->current());
    }

    public function testSetExternalIdInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setExternalId(new CategorySetExternalIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetExternalIdAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(CategorySetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setKey(new CategorySetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetKeyAction::class, $update->getActions()->current());
    }

    public function testSetMetaDescriptionCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaDescription(function($action) { static::assertInstanceOf(CategorySetMetaDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetMetaDescriptionInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaDescription(new CategorySetMetaDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetMetaKeywordsCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaKeywords(function($action) { static::assertInstanceOf(CategorySetMetaKeywordsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetMetaKeywordsInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaKeywords(new CategorySetMetaKeywordsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetMetaTitleCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaTitle(function($action) { static::assertInstanceOf(CategorySetMetaTitleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaTitleAction::class, $update->getActions()->current());
    }

    public function testSetMetaTitleInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaTitle(new CategorySetMetaTitleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaTitleAction::class, $update->getActions()->current());
    }

}
