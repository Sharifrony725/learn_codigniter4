<h1>{name | capitalize}</h1>
<p>{desc | limit_words()}</p>
<h5>{price |local_currency(BDT) }</h5>
<span>{date | date(l dS F Y)}</span><br>
<span>{date | date_modify(-1 year) | date(l dS F Y)}</span>
<h2>Available Language</h2>
<!-- <ul>
   <?php
    if (count($language) > 0) {
        foreach ($language as  $item) { ?>
        <li><?= $item; ?></li>
    <?php   } ?>
    <?php   } else {
        echo "Data not found";
    } ?>
</ul> -->
<!-- template engine -->
<!-- <ul>
    <?php
    if (count($language) > 0) :
        foreach ($language as  $item) :
    ?>
            <li><?php echo $item ?></li>
    <?php endforeach;
    else :
        echo "Data not found";
    endif;
    ?>
</ul> -->
<!-- {mans}
<span>{name}</span> <br>
<span>{email}</span><br>
<span>{age}</span><br>
<span>{height}</span><br>
{/mans} -->