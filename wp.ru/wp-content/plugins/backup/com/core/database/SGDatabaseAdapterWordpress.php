<?php
require_once(SG_DATABASE_PATH.'SGIDatabaseAdapter.php');

class SGDatabaseAdapterWordpress implements SGIDatabaseAdapter
{
	private $fetchRowIndex = 0;
	private $lastResult = array();
	private $connection = null;

	public function query($query, $params=array(), $resultType = ARRAY_A)
	{
		global $wpdb;

		$op = strtoupper(substr(trim($query), 0, 6));
		if ($op!='INSERT' && $op!='UPDATE' && $op!='DELETE')
		{
			if(!empty($params))
			{
				return @$wpdb->get_results($wpdb->prepare($query, $params), $resultType);
			}
			return @$wpdb->get_results($query, $resultType);
		}
		else
		{
			if(!empty($params))
			{
				return $wpdb->query($wpdb->prepare($query, $params));
			}
			return $wpdb->query($query);
		}
	}

	public function exec($query, $params=array())
	{
		global $wpdb;

		$this->fetchRowIndex = 0;
		$res = $wpdb->query($query);

		if ($res === false) {
			return false;
		}
		return $query;
	}

	public function execWithAdapter($query, $driver, $params=array())
	{
		if ($driver == SG_DB_DRIVER_MYSQLI && $this->connection) {
			$res = mysqli_query($this->connection, $query);

			if ($res === false) {
				$message = mysqli_error($this->connection);
				SGBackupLog::write($message);
			}
		}
		else {
			$res = $this->exec($query, $params);

			if ($res === false) {
				$message =  $this->getLastError();
				SGBackupLog::write($message);
			}
		}

		return $res;
	}

	public function connectOverMySqli()
	{
		$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		//set charset just in case if set names (inside sql file) doesn't work
		if ($this->connection) {
			mysqli_set_charset($this->connection, SG_DB_CHARSET);
		}

		return $this->connection;
	}

	public function closeMySqliConnection()
	{
		if ($this->connection) {
			mysqli_close($this->connection);
			$this->connection = null;
		}
	}

	public function isMySqliAvailable()
	{
		return function_exists('mysqli_connect');
	}

	public function fetch($st)
	{
		global $wpdb;

		if ($this->fetchRowIndex==0) {
			$this->lastResult = $wpdb->last_result;
		}

		$res = @$this->lastResult[$this->fetchRowIndex];
		if (!$res) return false;

		$this->fetchRowIndex++;
		return get_object_vars($res);
	}

	public function lastInsertId()
	{
		global $wpdb;
		return $wpdb->insert_id;
	}

	public function printLastError()
	{
		global $wpdb;
		$wpdb->print_error();
	}

	public function getLastError()
	{
		global $wpdb;
		return $wpdb->last_error;
	}

	public function flush()
	{
		global $wpdb;
		$wpdb->flush();
	}
}
