<?php
use yii\helpers\Url;
use app\modules\tests\assets\TestsAsset;

$this->title = $title;
$this->params['breadcrumbs'][] = ['label' => 'Tests', 'url' => Url::toRoute('/tests/index')];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tests-container">
    <div class="jumbotron">
        <h3>Το προφίλ στο facebook του</h3>
        <h1>Tom Vermost</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <h2>Who am I?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at dictum elit. Integer viverra lorem vitae odio aliquet dapibus. Maecenas ullamcorper pretium arcu. Fusce vulputate at velit et fermentum. Sed vulputate mi eget mi mattis ultricies. Nulla blandit, elit et vestibulum semper, odio enim lacinia nunc, ac fringilla lorem sem ut purus. Phasellus interdum, urna sit amet imperdiet maximus, velit magna hendrerit nisl, id blandit leo tortor ultrices nibh. Aenean sed porttitor nisl. In sit amet gravida mauris. Quisque in scelerisque metus. Phasellus quis tincidunt felis, non placerat leo. Quisque vehicula congue metus. Fusce sagittis tincidunt orci, non feugiat nisi interdum vel. Integer non eros nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
        </div>
        <div class="col-lg-4">
            <h3>Σχετικά με μένα</h3>
            <table>
                <tr>
                    <td>Όνομα</td>
                    <td class="strong">Tom</td>
                </tr>
                <tr>
                    <td>Επίθετο</td>
                    <td class="strong">Vermost</td>
                </tr>
                <tr>
                    <td>Ημερομηνία γεννήσης</td>
                    <td class="strong">17/10/1973</td>
                </tr>
                <tr>
                    <td>Υενέτειρα</td>
                    <td class="strong">Mechelen</td>
                </tr>
                <tr>
                    <td>Τόπος κατοικίας</td>
                    <td class="strong">Merksem</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Image gallery</h3>
            <p>Aliquam neque turpis, malesuada ac magna at, feugiat iaculis tellus. Sed dapibus iaculis lectus, non commodo ex vehicula id. Donec non vehicula nulla. Pellentesque erat dui, tincidunt id nunc a, tempus dignissim nulla. Donec blandit velit id diam pellentesque laoreet. In suscipit fermentum risus. Proin quis blandit tortor.</p>
            <div id="full-image">
            </div>
            <div class="images-container">
                <div id="backward-scroller" class="scroller">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </div>
                <div class="images">
                    <?php foreach($images as $image) : ?>
                        <div class="image">
                            <img src="<?= $image->url; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="forward-scroller" class="scroller">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <h3>Games</h3>
            <p>Aliquam neque turpis, malesuada ac magna at, feugiat iaculis tellus. Sed dapibus iaculis lectus, non commodo ex vehicula id. Donec non vehicula nulla. Pellentesque erat dui, tincidunt id nunc a, tempus dignissim nulla. Donec blandit velit id diam pellentesque laoreet. In suscipit fermentum risus. Proin quis blandit tortor.</p>
        </div>
        <div class="col-lg-4">
            <h3>Movies</h3>
            <p>Aliquam neque turpis, malesuada ac magna at, feugiat iaculis tellus. Sed dapibus iaculis lectus, non commodo ex vehicula id. Donec non vehicula nulla. Pellentesque erat dui, tincidunt id nunc a, tempus dignissim nulla. Donec blandit velit id diam pellentesque laoreet. In suscipit fermentum risus. Proin quis blandit tortor.</p>
        </div>
        <div class="col-lg-4">
            <h3>Music</h3>
            <p>Aliquam neque turpis, malesuada ac magna at, feugiat iaculis tellus. Sed dapibus iaculis lectus, non commodo ex vehicula id. Donec non vehicula nulla. Pellentesque erat dui, tincidunt id nunc a, tempus dignissim nulla. Donec blandit velit id diam pellentesque laoreet. In suscipit fermentum risus. Proin quis blandit tortor.</p>
        </div>
    </div>
</div>
<?php
TestsAsset::register($this);
?>