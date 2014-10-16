<?php

class CommentaireManager
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function getAllCommentaire($id_produit)
	{
		$sql = 'SELECT * FROM commentaire WHERE id_produit = :id_produit ORDER BY datecommentaire DESC';
		$req = $this->db->prepare($sql);
		$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "commentaire");
		$req->execute(array(':id_produit' => (int)$id_produit));
		return $req->fetchAll();
	}

	public function getMoyenne($id_produit)
	{
		$sql = 'SELECT AVG(note) as moyenne FROM commentaire WHERE id_produit = :id_produit';
		$req = $this->db->prepare($sql);
		$req->execute(array(':id_produit' => (int)$id_produit));
		$moyenne = $req->fetch();
		$moyenne = round($moyenne['moyenne']);
		return $moyenne;
	}

	public function getAllMoyenne()
	{
		$sql = '
			SELECT id_produit, AVG(note) as moyenne, count(id) as nb
			FROM commentaire
			GROUP BY id_produit';

		$req = $this->db->prepare($sql);
		$req->execute();
		$moyenne = $req->fetchAll();
		return $moyenne;
	}

	public function save($commentaire)
	{
		$sql = 'INSERT INTO commentaire (auteur, contenu, datecommentaire, note, id_produit)
			VALUES (:auteur, :contenu, :datecommentaire, :note, :id_produit)';
			$req = $this->db->prepare($sql);
			$req->execute(array(
				':auteur' => $commentaire->getAuteur(),
				':contenu' => $commentaire->getContenu(),
				':datecommentaire' => $commentaire->getDatecommentaire(),
				':note' => $commentaire->getNote(),
				':id_produit' => $commentaire->getIdProduit(),
			));
	}
}