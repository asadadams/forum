var func = require("./functions");

const className = process.argv[2];

const content = `<?php
    namespace Models;

    use Illuminate\\Database\\Eloquent\\Model as Eloquent;

    class ${func.capitalize(className)} extends Eloquent {

        protected $table = '${className.toLowerCase()}';

    }
  ?>`;

func.createFile("./app/Models", content, className);
