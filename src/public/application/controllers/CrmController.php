<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Crm;

class CrmController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		$this->view->layout = 'crm';
	}

	public function loginAction() {
		if (isset($_SESSION['crm'])) {
			$this->view->redirect('crm/add');
		}
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$_SESSION['crm'] = true;
			$this->view->location('crm/add');
		}
		$this->view->render('Вход', 'ключевое слово', 'Описание');
	}

	public function addAction() {
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'add')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->postAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Ошибка обработки запроса');
			}
			$this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Пост добавлен');
		}
		$this->view->render('Добавить пост', 'ключевое слово', 'Описание');
	}

	public function editAction() {
		if (!$this->model->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'edit')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->postEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->postUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Сохранено');
		}
		$vars = [
			'data' => $this->model->postData($this->route['id'])[0],
		];
		$this->view->render('Редактировать пост', 'ключевое слово', 'Описание', $vars);
	}

	public function deleteAction() {
		if (!$this->model->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$this->model->postDelete($this->route['id']);
		$this->view->redirect('crm/posts');
	}

	public function logoutAction() {
		unset($_SESSION['crm']);
		$this->view->redirect('crm/login');
	}

	public function postsAction() {
		$mainModel = new Main;
		$pagination = new Pagination($this->route, $mainModel->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $mainModel->postsList($this->route),
		];
		$this->view->render('Посты', 'ключевое слово', 'Описание', $vars);
	}

/* 	public function developAction() {
		unset($_SESSION['crm']);
		$this->view->redirect('crm/develop');
	} */

	public function developAction() {
		$this->view->render('Разработка | Панель управления', 'ключевое слово', 'Описание');
	}
}