    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
            'Perfil' => array(self::BELONGS_TO, 'Perfil', 'perfil'),
        );
    }
?>

