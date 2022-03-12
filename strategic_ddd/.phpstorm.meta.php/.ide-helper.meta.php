<?php
// @link https://confluence.jetbrains.com/display/PhpStorm/PhpStorm+Advanced+Metadata
namespace PHPSTORM_META {

	expectedArguments(
		\App\Model\Entity\DomainEvent::get(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::getError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::getInvalidField(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::getOriginal(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::has(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::hasValue(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::isDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::isEmpty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::setDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\DomainEvent::setError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\DomainEvent')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::get(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::getError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::getInvalidField(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::getOriginal(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::has(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::hasValue(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::isDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::isEmpty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::setDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\EventCount::setError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\EventCount')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::get(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::getError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::getInvalidField(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::getOriginal(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::has(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::hasValue(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::isDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::isEmpty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::setDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\App\Model\Entity\LocalAppEvent::setError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LocalAppEvent')
	);

	expectedArguments(
		\Cake\Cache\Cache::add(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::clear(),
		0,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::clearGroup(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::decrement(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::delete(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::deleteMany(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::increment(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::read(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::readMany(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::remember(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::write(),
		2,
		argumentsSet('cacheEngines')
	);

	exitPoint(\Cake\Console\ConsoleIo::abort());

	expectedArguments(
		\Cake\Controller\ComponentRegistry::unload(),
		0,
		'Auth',
		'Flash',
		'FormProtection',
		'Paginator',
		'RequestHandler',
		'Security'
	);

	override(
		\Cake\Controller\Controller::loadComponent(0),
		map([
			'Auth' => \Cake\Controller\Component\AuthComponent::class,
			'Flash' => \Cake\Controller\Component\FlashComponent::class,
			'FormProtection' => \Cake\Controller\Component\FormProtectionComponent::class,
			'Paginator' => \Cake\Controller\Component\PaginatorComponent::class,
			'RequestHandler' => \Cake\Controller\Component\RequestHandlerComponent::class,
			'Security' => \Cake\Controller\Component\SecurityComponent::class,
		])
	);

	expectedArguments(
		\Cake\Core\Configure::check(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::consume(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::consumeOrFail(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::delete(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::read(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::readOrFail(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::write(),
		0,
		argumentsSet('configureKeys')
	);

	override(
		\Cake\Core\PluginApplicationInterface::addPlugin(0),
		map([
			'Bake' => \Cake\Http\BaseApplication::class,
			'Cake/TwigView' => \Cake\Http\BaseApplication::class,
			'DebugKit' => \Cake\Http\BaseApplication::class,
			'IdeHelper' => \Cake\Http\BaseApplication::class,
			'Migrations' => \Cake\Http\BaseApplication::class,
		])
	);

	override(
		\Cake\Database\TypeFactory::build(0),
		map([
			'biginteger' => \Cake\Database\Type\IntegerType::class,
			'binary' => \Cake\Database\Type\BinaryType::class,
			'binaryuuid' => \Cake\Database\Type\BinaryUuidType::class,
			'boolean' => \Cake\Database\Type\BoolType::class,
			'char' => \Cake\Database\Type\StringType::class,
			'date' => \Cake\Database\Type\DateType::class,
			'datetime' => \Cake\Database\Type\DateTimeType::class,
			'datetimefractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'decimal' => \Cake\Database\Type\DecimalType::class,
			'float' => \Cake\Database\Type\FloatType::class,
			'integer' => \Cake\Database\Type\IntegerType::class,
			'json' => \Cake\Database\Type\JsonType::class,
			'smallinteger' => \Cake\Database\Type\IntegerType::class,
			'string' => \Cake\Database\Type\StringType::class,
			'text' => \Cake\Database\Type\StringType::class,
			'time' => \Cake\Database\Type\StringType::class,
			'timestamp' => \Cake\Database\Type\DateTimeType::class,
			'timestampfractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'timestamptimezone' => \Cake\Database\Type\DateTimeTimezoneType::class,
			'tinyinteger' => \Cake\Database\Type\IntegerType::class,
			'uuid' => \Cake\Database\Type\UuidType::class,
		])
	);

	expectedArguments(
		\Cake\Database\TypeFactory::map(),
		0,
		'biginteger',
		'binary',
		'binaryuuid',
		'boolean',
		'char',
		'date',
		'datetime',
		'datetimefractional',
		'decimal',
		'float',
		'integer',
		'json',
		'smallinteger',
		'string',
		'text',
		'time',
		'timestamp',
		'timestampfractional',
		'timestamptimezone',
		'tinyinteger',
		'uuid'
	);

	expectedArguments(
		\Cake\Datasource\ConnectionManager::get(),
		0,
		'default',
		'test'
	);

	override(
		\Cake\Datasource\ModelAwareTrait::loadModel(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'DomainEvents' => \App\Model\Table\DomainEventsTable::class,
			'EventCounts' => \App\Model\Table\EventCountsTable::class,
			'LocalAppEvents' => \App\Model\Table\LocalAppEventsTable::class,
		])
	);

	override(
		\Cake\Datasource\QueryInterface::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	expectedArguments(
		\Cake\Http\ServerRequest::getParam(),
		0,
		'_ext',
		'_matchedRoute',
		'action',
		'controller',
		'pass',
		'plugin',
		'prefix'
	);

	override(
		\Cake\ORM\Association::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Locator\LocatorAwareTrait::fetchTable(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'DomainEvents' => \App\Model\Table\DomainEventsTable::class,
			'EventCounts' => \App\Model\Table\EventCountsTable::class,
			'LocalAppEvents' => \App\Model\Table\LocalAppEventsTable::class,
		])
	);

	override(
		\Cake\ORM\Locator\LocatorInterface::get(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'DomainEvents' => \App\Model\Table\DomainEventsTable::class,
			'EventCounts' => \App\Model\Table\EventCountsTable::class,
			'LocalAppEvents' => \App\Model\Table\LocalAppEventsTable::class,
		])
	);

	expectedArguments(
		\Cake\ORM\Table::addBehavior(),
		0,
		'CounterCache',
		'DebugKit.Timed',
		'Timestamp',
		'Translate',
		'Tree'
	);

	override(
		\Cake\ORM\Table::belongToMany(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsToMany::class,
			'DomainEvents' => \Cake\ORM\Association\BelongsToMany::class,
			'EventCounts' => \Cake\ORM\Association\BelongsToMany::class,
			'LocalAppEvents' => \Cake\ORM\Association\BelongsToMany::class,
		])
	);

	override(
		\Cake\ORM\Table::belongsTo(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsTo::class,
			'DomainEvents' => \Cake\ORM\Association\BelongsTo::class,
			'EventCounts' => \Cake\ORM\Association\BelongsTo::class,
			'LocalAppEvents' => \Cake\ORM\Association\BelongsTo::class,
		])
	);

	override(
		\Cake\ORM\Table::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Table::hasMany(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasMany::class,
			'DomainEvents' => \Cake\ORM\Association\HasMany::class,
			'EventCounts' => \Cake\ORM\Association\HasMany::class,
			'LocalAppEvents' => \Cake\ORM\Association\HasMany::class,
		])
	);

	override(
		\Cake\ORM\Table::hasOne(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasOne::class,
			'DomainEvents' => \Cake\ORM\Association\HasOne::class,
			'EventCounts' => \Cake\ORM\Association\HasOne::class,
			'LocalAppEvents' => \Cake\ORM\Association\HasOne::class,
		])
	);

	expectedArguments(
		\Cake\ORM\Table::removeBehavior(),
		0,
		'CounterCache',
		'Timed',
		'Timestamp',
		'Translate',
		'Tree'
	);

	override(
		\Cake\ORM\TableRegistry::get(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'DomainEvents' => \App\Model\Table\DomainEventsTable::class,
			'EventCounts' => \App\Model\Table\EventCountsTable::class,
			'LocalAppEvents' => \App\Model\Table\LocalAppEventsTable::class,
		])
	);

	expectedArguments(
		\Cake\Routing\Router::pathUrl(),
		0,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\TestSuite\TestCase::addFixture(),
		0,
		'core.Articles',
		'core.ArticlesMoreTranslations',
		'core.ArticlesTags',
		'core.ArticlesTranslations',
		'core.Attachments',
		'core.AuthUsers',
		'core.Authors',
		'core.AuthorsTags',
		'core.AuthorsTranslations',
		'core.BinaryUuidItems',
		'core.BinaryUuidItemsBinaryUuidTags',
		'core.BinaryUuidTags',
		'core.CakeSessions',
		'core.Categories',
		'core.ColumnSchemaAwareTypeValues',
		'core.Comments',
		'core.CommentsTranslations',
		'core.CompositeIncrements',
		'core.CounterCacheCategories',
		'core.CounterCacheComments',
		'core.CounterCachePosts',
		'core.CounterCacheUserCategoryPosts',
		'core.CounterCacheUsers',
		'core.Datatypes',
		'core.DateKeys',
		'core.FeaturedTags',
		'core.Members',
		'core.MenuLinkTrees',
		'core.NullableAuthors',
		'core.NumberTrees',
		'core.OrderedUuidItems',
		'core.Orders',
		'core.OtherArticles',
		'core.PolymorphicTagged',
		'core.Posts',
		'core.Products',
		'core.Profiles',
		'core.Sections',
		'core.SectionsMembers',
		'core.SectionsTranslations',
		'core.Sessions',
		'core.SiteArticles',
		'core.SiteArticlesTags',
		'core.SiteAuthors',
		'core.SiteTags',
		'core.SpecialTags',
		'core.SpecialTagsTranslations',
		'core.Tags',
		'core.TagsShadowTranslations',
		'core.TagsTranslations',
		'core.TestPluginComments',
		'core.Things',
		'core.Translates',
		'core.UniqueAuthors',
		'core.Users',
		'core.UuidItems',
		'plugin.Bake.Articles',
		'plugin.Bake.ArticlesTags',
		'plugin.Bake.Authors',
		'plugin.Bake.BakeArticles',
		'plugin.Bake.BakeArticlesBakeTags',
		'plugin.Bake.BakeCar',
		'plugin.Bake.BakeComments',
		'plugin.Bake.BakeTags',
		'plugin.Bake.BakeTemplateAuthors',
		'plugin.Bake.BakeTemplateProfiles',
		'plugin.Bake.BakeTemplateRoles',
		'plugin.Bake.BinaryTests',
		'plugin.Bake.Categories',
		'plugin.Bake.CategoriesProducts',
		'plugin.Bake.CategoryThreads',
		'plugin.Bake.Comments',
		'plugin.Bake.Datatypes',
		'plugin.Bake.HiddenFields',
		'plugin.Bake.Invitations',
		'plugin.Bake.NumberTrees',
		'plugin.Bake.OldProducts',
		'plugin.Bake.Posts',
		'plugin.Bake.ProductVersions',
		'plugin.Bake.Products',
		'plugin.Bake.Tags',
		'plugin.Bake.TodoItems',
		'plugin.Bake.TodoItemsTodoLabels',
		'plugin.Bake.TodoLabels',
		'plugin.Bake.TodoTasks',
		'plugin.Bake.UniqueFields',
		'plugin.Bake.Users',
		'plugin.DebugKit.Panels',
		'plugin.DebugKit.Requests',
		'plugin.IdeHelper.BarBars',
		'plugin.IdeHelper.Cars',
		'plugin.IdeHelper.Foo',
		'plugin.IdeHelper.Houses',
		'plugin.IdeHelper.Wheels',
		'plugin.IdeHelper.Windows'
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyArray(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyDate(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyDateTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyFile(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyFor(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyString(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyArray(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyDate(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyDateTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyFile(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyString(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::requirePresence(),
		1,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\View\Helper\FormHelper::control(),
		0,
		'action',
		'created',
		'description',
		'detail',
		'event_count',
		'event_uuid',
		'id',
		'id_of_source',
		'modified',
		'source_table',
		'subsystem',
		'when_counted',
		'when_occurred'
	);

	expectedArguments(
		\Cake\View\Helper\HtmlHelper::linkFromPath(),
		1,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\View\Helper\UrlHelper::buildFromPath(),
		0,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\View\View::element(),
		0,
		'Cake/TwigView.twig_panel',
		'DebugKit.cache_panel',
		'DebugKit.deprecations_panel',
		'DebugKit.environment_panel',
		'DebugKit.history_panel',
		'DebugKit.include_panel',
		'DebugKit.log_panel',
		'DebugKit.mail_panel',
		'DebugKit.packages_panel',
		'DebugKit.preview_header',
		'DebugKit.request_panel',
		'DebugKit.routes_panel',
		'DebugKit.session_panel',
		'DebugKit.sql_log_panel',
		'DebugKit.timer_panel',
		'DebugKit.variables_panel',
		'flash/default',
		'flash/error',
		'flash/info',
		'flash/success',
		'flash/warning'
	);

	override(
		\Cake\View\View::loadHelper(0),
		map([
			'Bake.Bake' => \Bake\View\Helper\BakeHelper::class,
			'Bake.DocBlock' => \Bake\View\Helper\DocBlockHelper::class,
			'Breadcrumbs' => \Cake\View\Helper\BreadcrumbsHelper::class,
			'DebugKit.Credentials' => \DebugKit\View\Helper\CredentialsHelper::class,
			'DebugKit.SimpleGraph' => \DebugKit\View\Helper\SimpleGraphHelper::class,
			'DebugKit.Toolbar' => \DebugKit\View\Helper\ToolbarHelper::class,
			'Flash' => \Cake\View\Helper\FlashHelper::class,
			'Form' => \Cake\View\Helper\FormHelper::class,
			'Html' => \Cake\View\Helper\HtmlHelper::class,
			'IdeHelper.DocBlock' => \IdeHelper\View\Helper\DocBlockHelper::class,
			'Migrations.Migration' => \Migrations\View\Helper\MigrationHelper::class,
			'Number' => \Cake\View\Helper\NumberHelper::class,
			'Paginator' => \Cake\View\Helper\PaginatorHelper::class,
			'Text' => \Cake\View\Helper\TextHelper::class,
			'Time' => \Cake\View\Helper\TimeHelper::class,
			'Url' => \Cake\View\Helper\UrlHelper::class,
		])
	);

	expectedArguments(
		\Cake\View\ViewBuilder::addHelper(),
		0,
		'Bake.Bake',
		'Bake.DocBlock',
		'Breadcrumbs',
		'DebugKit.Credentials',
		'DebugKit.SimpleGraph',
		'DebugKit.Toolbar',
		'Flash',
		'Form',
		'Html',
		'IdeHelper.DocBlock',
		'Migrations.Migration',
		'Number',
		'Paginator',
		'Text',
		'Time',
		'Url'
	);

	expectedArguments(
		\Cake\View\ViewBuilder::setLayout(),
		0,
		'DebugKit.dashboard',
		'DebugKit.mailer',
		'DebugKit.toolbar',
		'ajax',
		'default',
		'error'
	);

	expectedArguments(
		\Migrations\AbstractMigration::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\AbstractSeed::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\Table::addColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::addColumn(),
		1,
		argumentsSet('columnTypes')
	);

	expectedArguments(
		\Migrations\Table::changeColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::changeColumn(),
		1,
		argumentsSet('columnTypes')
	);

	expectedArguments(
		\Migrations\Table::hasColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::removeColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::renameColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::renameColumn(),
		1,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Phinx\Seed\AbstractSeed::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\__d(),
		0,
		'bake',
		'cake',
		'cake/twig_view',
		'debug_kit',
		'ide_helper',
		'migrations'
	);

	expectedArguments(
		\env(),
		0,
		'CGI_MODE',
		'COMMAND_MODE',
		'CONTENT_LENGTH',
		'CONTENT_TYPE',
		'DISPLAY',
		'DOCUMENT_ROOT',
		'DOCUMENT_URI',
		'EDITOR',
		'GATEWAY_INTERFACE',
		'HISTFILESIZE',
		'HISTIGNORE',
		'HISTSIZE',
		'HOME',
		'HTTPS',
		'HTTP_ACCEPT',
		'HTTP_ACCEPT_ENCODING',
		'HTTP_ACCEPT_LANGUAGE',
		'HTTP_CONNECTION',
		'HTTP_COOKIE',
		'HTTP_HOST',
		'HTTP_USER_AGENT',
		'JAVA_HOME',
		'LC_CTYPE',
		'LOGNAME',
		'PATH',
		'PATH_TRANSLATED',
		'PHP_SELF',
		'PWD',
		'QUERY_STRING',
		'REDIRECT_STATUS',
		'REMOTE_ADDR',
		'REMOTE_PORT',
		'REQUEST_METHOD',
		'REQUEST_SCHEME',
		'REQUEST_TIME',
		'REQUEST_TIME_FLOAT',
		'REQUEST_URI',
		'SCRIPT_FILENAME',
		'SCRIPT_NAME',
		'SERVER_NAME',
		'SERVER_PORT',
		'SERVER_PROTOCOL',
		'SHELL',
		'SHLVL',
		'SSH_AUTH_SOCK',
		'TERM',
		'TERMINAL_EMULATOR',
		'TERM_SESSION_ID',
		'TMPDIR',
		'USER',
		'XPC_FLAGS',
		'XPC_SERVICE_NAME',
		'argc',
		'argv',
		'rvm_bin_path',
		'rvm_path',
		'rvm_prefix',
		'rvm_version'
	);

	expectedArguments(
		\urlArray(),
		0,
		argumentsSet('routePaths')
	);

	registerArgumentsSet(
		'cacheEngines',
		'_cake_core_',
		'_cake_model_',
		'_cake_routes_',
		'default'
	);

	registerArgumentsSet(
		'columnNames',
		'action',
		'created',
		'description',
		'detail',
		'event_count',
		'event_uuid',
		'id',
		'id_of_source',
		'modified',
		'source_table',
		'subsystem',
		'when_counted',
		'when_occurred'
	);

	registerArgumentsSet(
		'columnTypes',
		'biginteger',
		'binary',
		'binaryuuid',
		'bit',
		'blob',
		'boolean',
		'char',
		'date',
		'datetime',
		'decimal',
		'double',
		'enum',
		'float',
		'geometry',
		'integer',
		'json',
		'linestring',
		'longblob',
		'mediumblob',
		'mediuminteger',
		'point',
		'polygon',
		'set',
		'smallinteger',
		'string',
		'text',
		'time',
		'timestamp',
		'tinyblob',
		'tinyinteger',
		'uuid',
		'varbinary',
		'year'
	);

	registerArgumentsSet(
		'configureKeys',
		'App',
		'App.base',
		'App.cssBaseUrl',
		'App.defaultLocale',
		'App.defaultTimezone',
		'App.dir',
		'App.encoding',
		'App.fullBaseUrl',
		'App.imageBaseUrl',
		'App.jsBaseUrl',
		'App.namespace',
		'App.paths',
		'App.paths.locales',
		'App.paths.plugins',
		'App.paths.templates',
		'App.webroot',
		'App.wwwRoot',
		'Asset',
		'Debugger',
		'Debugger.editor',
		'Error',
		'Error.errorLevel',
		'Error.exceptionRenderer',
		'Error.ignoredDeprecationPaths',
		'Error.log',
		'Error.skipLog',
		'Error.trace',
		'Security',
		'Session',
		'Session.defaults',
		'debug',
		'plugins',
		'plugins.Bake',
		'plugins.Cake/TwigView',
		'plugins.DebugKit',
		'plugins.IdeHelper',
		'plugins.Migrations'
	);

	registerArgumentsSet(
		'entityFields:App\Model\Entity\DomainEvent',
		'action',
		'created',
		'description',
		'detail',
		'event_uuid',
		'id',
		'id_of_source',
		'modified',
		'source_table',
		'subsystem',
		'when_occurred'
	);

	registerArgumentsSet(
		'entityFields:App\Model\Entity\EventCount',
		'created',
		'event_count',
		'id',
		'modified',
		'when_counted'
	);

	registerArgumentsSet(
		'entityFields:App\Model\Entity\LocalAppEvent',
		'action',
		'created',
		'description',
		'detail',
		'event_uuid',
		'id',
		'modified',
		'subsystem',
		'when_occurred'
	);

	registerArgumentsSet(
		'routePaths',
		'DebugKit.Composer::checkDependencies',
		'DebugKit.Dashboard::index',
		'DebugKit.Dashboard::reset',
		'DebugKit.MailPreview::email',
		'DebugKit.MailPreview::index',
		'DebugKit.MailPreview::sent',
		'DebugKit.Panels::index',
		'DebugKit.Panels::latestHistory',
		'DebugKit.Panels::view',
		'DebugKit.Requests::view',
		'DebugKit.Toolbar::clearCache',
		'Pages::display'
	);

	registerArgumentsSet(
		'tableNames',
		'domain_events',
		'event_counts',
		'local_app_events'
	);

	registerArgumentsSet(
		'validationWhen',
		'create',
		'update'
	);

}
