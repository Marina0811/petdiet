public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->date('start');
            $table->string('textColor');
            $table->timestamps();
        });
    }