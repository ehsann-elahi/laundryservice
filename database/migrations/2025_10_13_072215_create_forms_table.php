    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateFormsTable extends Migration
    {
        public function up()
        {
            Schema::create('forms', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug')->unique();
                $table->text('template_json')->nullable(); // structure for dynamic rendering
                $table->string('template_pdf_path')->nullable(); // optional original PDF path
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('forms');
        }
    }
