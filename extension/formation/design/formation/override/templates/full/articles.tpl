<div>
    <ul>
     
        <h1> Titre :</h1> {$node.data_map.titre.content}<br />

   
<b> Déscription :</b>
{if is_null($node.data_map.article.content.input.input_xml)}
<p>Aucune déscription</p>
{else}
    {$node.data_map.article.content.input.input_xml}<br />
{/if}
    

{attribute_view_gui attribute=$node.data_map.img image_class=”gros”}
     
    </ul>
</div>

