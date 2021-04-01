<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->float('price');
            $table->text('details');
            $table->text('manual');
            $table->string('image');
        });
        
        DB::table('products')->insert(['name' => 'Olivenbaum XL P160 l', 'price' => 3.75, 'details' => 'Beliebte, mediterrane Pflanze ist sehr langsam wüchsig, wird aber über die Jahre bis zu 2,5 m hoch.','manual'=>'Er ist der Inbegriff des sonnigen Südens und eine der beliebtesten Kübelpflanzen überhaupt – der Olivenbaum (Olea europea) ist ein mehrjähriger und immergrüner Kleinbaum. Die mediterrane Pflanze ist sehr langsamwüchsig, kann in ihrer mediterranen Heimat aber über die Jahrzehnte bis zu 20 m hoch werden. Im Kübel erreicht der Olivenbaum dagegen höchstens 2,5 m. Olivenbäume gewinnen mit den Jahren stark an ästhetischer Ausstrahlung. Je älter die Bäume sind, umso malerischer präsentieren sie sich.', 'image' => 'https://www.landi.ch/ImageOriginal/Img/product/057/813/57813_olivenbaum-xl-p160-l_57813_1.jpg?width=1600&height=1600&mode=pad&bgcolor=fff']);
        DB::table('products')->insert(['name' => 'Cupressocyparis l. CWG Bonsai Schale', 'price' =>2.00, 'details' => 'ggbruder','manual'=>'beannnzzz', 'image' => 'https://www.landi.ch/ImageOriginal/Img/product/064/246/64246_cupressocyparis-l-cwg-bonsai-schale_64246_1.jpg?width=1600&height=1600&mode=pad&bgcolor=fff']);
        DB::table('products')->insert(['name' => 'Citrus Spalier', 'price' => 420.00, 'details' => 'Zitronenbaum','manual'=>'ein Baum für Zitronen :)', 'image' => 'https://www.landi.ch/ImageOriginal/Img/product/057/674/57674_citrus-spalier-p33-cm_57674_1.jpg?width=1600&height=1600&mode=pad&bgcolor=fff']);
        DB::table('products')->insert(['name' => 'elias', 'price' => 0.50, 'details' => 'frisch vom elsass','manual'=>'ein elias', 'image' => 'https://media.discordapp.net/attachments/508711115698470944/827095411751125002/elias.png']);
        DB::table('products')->insert(['name' => 'el tony', 'price' => 2.50, 'details' => 'Koffeinhaltiges Erfrischungsgetränk aus Mate (Aufguss) und Guaranaextrakt','manual'=>'EL TONY® MATE - frisch aufgebrühter Mate-Tee aus Südamerika, verfeinert mit Guarana und Zitronensaft. Eine einmalige Mischung, die erfrischt und belebt. Yerba Mate - bereits von den Guarani als <> bezeichnet - enthält natürliches Koffein und wird in Südamerika bis', 'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fintelligentfood.ch%2Fwp-content%2Fuploads%2F2018%2F11%2Frahelandron-eltony-packshots-00205.jpg&f=1&nofb=1']);
        DB::table('products')->insert(['name' => 'lamp', 'price' => 8.75, 'details' => 'Eine ganz coole Lampe','manual'=>'Eine Lampe vom feinsten.', 'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flevitationarts.com%2Fcoolnewtechgadgets%2Fwp-content%2Fuploads%2F2016%2F11%2FRed-Lamp-On-Info-Page.jpg&f=1&nofb=1']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
