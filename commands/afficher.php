<?php




class VehiculePagination
{
    private $db;
    private $limit;
    private $offset;
    private $currentPage;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
        $this->limit = 3;
        $this->setPagination();
    }

    private function setPagination()
    {
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $this->currentPage = htmlspecialchars($_GET['page']);
            $this->offset = ($this->currentPage - 1) * $this->limit;
        } else {
            $this->currentPage = 1;
            $this->offset = 0;
        }
    }

    public function getVehicules()
    {

        $sql = $this->db->prepare("SELECT * FROM vehicule LIMIT :limit OFFSET :offset");
        $sql->bindParam(':limit', $this->limit, PDO::PARAM_INT);
        $sql->bindParam(':offset', $this->offset, PDO::PARAM_INT);
        $sql->execute();

        $getRows = $this->db->prepare("SELECT COUNT(*) AS result FROM vehicule");
        $getRows->execute();
        $getRowCount = $getRows->fetch(PDO::FETCH_ASSOC)['result'];
        $totalPages = ceil($getRowCount / $this->limit);

        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        return [
            'getData' => $data,
            'totalPages' => $totalPages,
            'currentPage' => $this->currentPage
        ];
    }
}

require_once '../database.php';

$conn = new database();
$db = $conn->getConnect();


$pagination = new VehiculePagination($db);


$response = $pagination->getVehicules();
echo json_encode($response);
