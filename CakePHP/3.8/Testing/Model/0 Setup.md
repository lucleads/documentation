# Setup

A la hora de realizar tests sobre un Modelo, debemos configurar los siguientes puntos:

- Generar una variable fixture con el nombre de la tabla a testear.
- Poblar el array `$fixtures` de Cake con las tablas que necesitamos que tengan datos para los tests.

- SetUp
  - Dar valor al fixture con le nombre de la tabla.
- TearDown
  - Unset el fixture con el nombre de la tabla.
- dataProviders
  - Crear un data provider con las relaciones con otras tablas (en caso de que las tuviera).
  - Crear un data provider con los campos que contiene la tabla.

**Ejemplo**

```php
class CategoriesTableTest extends TestCase
{
  /**
    * Test subject
    *
    * @var \App\Model\Table\CategoriesTable
    */
    public $Categories;
    
   /**
    * Fixtures
    *
    * @var array
    */
    public $fixtures = [
        'app.Categories',
    ];

   /**
    * setUp method
    */
    public function setUp()
    {
        parent::setUp();

        $config = TableRegistry::getTableLocator()->exists('Categories') ? [] : ['className' => CategoriesTable::class];
        $this->Categories = TableRegistry::getTableLocator()->get('Categories', $config);
    }

   /**
    * tearDown method
    */
    public function tearDown()
    {
        unset($this->Categories);

        parent::tearDown();
    }

   /**
    * dataProvider para las relaciones con otras tablas
    */
    public function relatedTables()
    {
        return [
            'Tabla Documents' => ['Documents'],
        ];
    }

   /**
    * dataProvider para los campos que contiene la tabla
    */
    public function validatorFields()
    {
        return [
            'Campo ID' => ['id'],
            'Campo Nombre' => ['name'],
        ];
    }
}
```

