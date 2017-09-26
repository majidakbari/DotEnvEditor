<?php
namespace makbari\DotEnvEditor\handler;

use makbari\DotEnvEditor\core\DotEnvEditor;
use makbari\DotEnvEditor\exceptions\DotEnvException;

class Handler
{

    /**
     * @var DotEnvEditor
     */
    protected $env;

    /**
     * Handler constructor.
     * @param string $configPath
     */
    public function __construct(string $configPath ='')
    {
        if (empty($configPath)){
            $configPath = dirname(__DIR__).'/config/dotenveditor.php';
        }

        $this->env = new DotEnvEditor($configPath);
    }


    /**
     * @return array
     */
    public function overview()
    {
        $data['values'] = $this->env->getContent();

        try{
            $data['backups'] = $this->env->getBackupVersions();
        } catch(DotEnvException $e){
            $data['backups'] = false;
        }

        return $data;
    }

    /**
     * @param array $data
     * @return bool|array
     */
    public function add(array $data = [])
    {
        try{
            $this->env->addData($data);
        }
        catch (DotEnvException $e){
            return false;
        }

        return $data;
    }

    /**
     * @param array $data
     * @return array | bool
     */
    public function update(array $data = [])
    {
        try{
            $this->env->changeEnv($data);
        }
        catch (DotEnvException $e){
            return false;
        }

        return $data;
    }


    /**
     * @param int $timestamp
     * @return string
     */
    public function getDetails($timestamp = null) :string
    {
        return $this->env->getAsJson($timestamp);
    }


    /**
     * @return bool
     */
    public function createBackup() :bool
    {
        return $this->env->createBackup();
    }


    /**
     * @param int $timestamp
     * @return bool
     */
    public function deleteBackup(int $timestamp) : bool
    {
        try{
            return $this->env->deleteBackup($timestamp);
        }
        catch (DotEnvException $e){
            return false;
        }
    }


    /**
     * @param int $timestamp
     * @return bool
     */
    public function restore(int $timestamp) :bool
    {
        try{
        $this->env->restoreBackup($timestamp);
        }
        catch (DotEnvException $e) {
            return false;
        }

        return true;
    }

    /**
     * @param array $data (array of keys)
     * @return bool
     */
    public function delete(array $data = []) :bool
    {
        try{
            $this->env->deleteData($data);
        }catch (DotEnvException $e){
            return false;
        }

        return true;
    }
}
