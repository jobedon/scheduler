<?php

/**
 * BaseUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $identificacion
 * @property string $matricula
 * @property string $nombre_usuario
 * @property string $contrasenia
 * @property string $nombres
 * @property string $apellidos
 * @property string $correo
 * @property string $correo_alternativo
 * @property string $telefono
 * @property string $celular
 * @property string $direccion
 * @property string $pagina_web
 * @property blob $foto
 * @property date $cumpleanio
 * @property string $twitter
 * @property string $genero
 * @property boolean $admin
 * @property boolean $espol
 * @property boolean $activo
 * @property boolean $eliminado
 * @property string $token
 * @property string $search_token
 * @property Doctrine_Collection $Compartidos
 * @property Doctrine_Collection $Comparten
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method string              getIdentificacion()     Returns the current record's "identificacion" value
 * @method string              getMatricula()          Returns the current record's "matricula" value
 * @method string              getNombreUsuario()      Returns the current record's "nombre_usuario" value
 * @method string              getContrasenia()        Returns the current record's "contrasenia" value
 * @method string              getNombres()            Returns the current record's "nombres" value
 * @method string              getApellidos()          Returns the current record's "apellidos" value
 * @method string              getCorreo()             Returns the current record's "correo" value
 * @method string              getCorreoAlternativo()  Returns the current record's "correo_alternativo" value
 * @method string              getTelefono()           Returns the current record's "telefono" value
 * @method string              getCelular()            Returns the current record's "celular" value
 * @method string              getDireccion()          Returns the current record's "direccion" value
 * @method string              getPaginaWeb()          Returns the current record's "pagina_web" value
 * @method blob                getFoto()               Returns the current record's "foto" value
 * @method date                getCumpleanio()         Returns the current record's "cumpleanio" value
 * @method string              getTwitter()            Returns the current record's "twitter" value
 * @method string              getGenero()             Returns the current record's "genero" value
 * @method boolean             getAdmin()              Returns the current record's "admin" value
 * @method boolean             getEspol()              Returns the current record's "espol" value
 * @method boolean             getActivo()             Returns the current record's "activo" value
 * @method boolean             getEliminado()          Returns the current record's "eliminado" value
 * @method string              getToken()              Returns the current record's "token" value
 * @method string              getSearchToken()        Returns the current record's "search_token" value
 * @method Doctrine_Collection getCompartidos()        Returns the current record's "Compartidos" collection
 * @method Doctrine_Collection getComparten()          Returns the current record's "Comparten" collection
 * @method Usuario             setId()                 Sets the current record's "id" value
 * @method Usuario             setIdentificacion()     Sets the current record's "identificacion" value
 * @method Usuario             setMatricula()          Sets the current record's "matricula" value
 * @method Usuario             setNombreUsuario()      Sets the current record's "nombre_usuario" value
 * @method Usuario             setContrasenia()        Sets the current record's "contrasenia" value
 * @method Usuario             setNombres()            Sets the current record's "nombres" value
 * @method Usuario             setApellidos()          Sets the current record's "apellidos" value
 * @method Usuario             setCorreo()             Sets the current record's "correo" value
 * @method Usuario             setCorreoAlternativo()  Sets the current record's "correo_alternativo" value
 * @method Usuario             setTelefono()           Sets the current record's "telefono" value
 * @method Usuario             setCelular()            Sets the current record's "celular" value
 * @method Usuario             setDireccion()          Sets the current record's "direccion" value
 * @method Usuario             setPaginaWeb()          Sets the current record's "pagina_web" value
 * @method Usuario             setFoto()               Sets the current record's "foto" value
 * @method Usuario             setCumpleanio()         Sets the current record's "cumpleanio" value
 * @method Usuario             setTwitter()            Sets the current record's "twitter" value
 * @method Usuario             setGenero()             Sets the current record's "genero" value
 * @method Usuario             setAdmin()              Sets the current record's "admin" value
 * @method Usuario             setEspol()              Sets the current record's "espol" value
 * @method Usuario             setActivo()             Sets the current record's "activo" value
 * @method Usuario             setEliminado()          Sets the current record's "eliminado" value
 * @method Usuario             setToken()              Sets the current record's "token" value
 * @method Usuario             setSearchToken()        Sets the current record's "search_token" value
 * @method Usuario             setCompartidos()        Sets the current record's "Compartidos" collection
 * @method Usuario             setComparten()          Sets the current record's "Comparten" collection
 * 
 * @package    scheduler
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'unique' => true,
             'length' => 4,
             ));
        $this->hasColumn('identificacion', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('matricula', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('nombre_usuario', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('contrasenia', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('nombres', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('apellidos', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('correo', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('correo_alternativo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('telefono', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('celular', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('direccion', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('pagina_web', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('foto', 'blob', null, array(
             'type' => 'blob',
             'notnull' => false,
             ));
        $this->hasColumn('cumpleanio', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('twitter', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('genero', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             ));
        $this->hasColumn('admin', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('espol', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('activo', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('eliminado', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('search_token', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Usuario as Compartidos', array(
             'refClass' => 'Compartir',
             'local' => 'comparte_id',
             'foreign' => 'compartido_id'));

        $this->hasMany('Usuario as Comparten', array(
             'refClass' => 'Compartir',
             'local' => 'compartido_id',
             'foreign' => 'comparte_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}