<?php include "includes/header.php";?>

<p><strong>Research:</strong> Since our final project will be about creating a BIG project we need to understand more about what is a Flex Box, how do we use it, which browser supports it, and the flexbox shim in each browser.</p>

<p>My research start to understanding what is a FlexBox in the website <a href="https://internetingishard.com/html-and-css/flexbox/" >https://internetingishard.com/html-and-css/flexbox/ </a></p>

<p>I found a complete guide of what is a flexbox, and how can I use it. This guide explains most of the things about flexbox, focusing on different possible properties for the parent element. <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/ ">https://css-tricks.com/snippets/css/a-guide-to-flexbox/ </a></p>

<p>I search in w3school website to verify which browser supports the Flexbox, which version and more details about this tool. <a href="https://www.w3schools.com/css/css3_flexbox.asp"></a>https://www.w3schools.com/css/css3_flexbox.asp</p> 

<p>I review the website that Sara Newman sent us to review the shims for the Flex Box in order to see which other options we can use in case that the browsers do not support it. <a href="https://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-Browser-Polyfills">https://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-Browser-Polyfills </a></p>

 
<p><strong>Gather:</strong></p>  

<p><a href="https://internetingishard.com/html-and-css/flexbox/">https://internetingishard.com/html-and-css/flexbox/</a> The “Flexible Box” or “Flexbox”. - help us with different options to model the appearance of a web page overall. The attribute  floats it’s a good tool; however this option only allow us to set it horizontally position of  boxes, while the flexbox permit us to handle the box whatever we need talking about the alignment, direction, order, and size of our boxes. </p>

<p><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">https://css-tricks.com/snippets/css/a-guide-to-flexbox/</a> - The propose of the idea of using a flex layout is to wrap things giving the ability to modify the items in some basic attributes like width or height to best fill the available space (mostly to accommodate to all kind of display devices and screen sizes). The flex container expands items to fill available free space, or shrinks them to prevent overflow. </p>

<p><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">https://css-tricks.com/snippets/css/a-guide-to-flexbox/</a> - The flex layout its independent of the direction talking about the regular designs of several websites that use the properties in vertical alignments or horizontally talking for the lines of the content of the website, which works great for the websites, but they have a lack of flexibility in big applications or even in some complex apps.</p>    

<p><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">https://css-tricks.com/snippets/css/a-guide-to-flexbox/</a> - Another important thing to understand is that the Flexbox layout should be used more for applications components or small-scale layouts because for that we most use the Grid layout. </p> 

<p><a href="https://www.w3schools.com/css/css3_flexbox.asp">https://www.w3schools.com/css/css3_flexbox.asp </a> The Flexbox tool it is supported for most of the modern browsers, but we need to define first a container. The below table displays the version of the browsers that support it. </p>

<img src="images/flexbox_1.png" alt="Source 1" width="100%"/>

<p><strong>Write: </strong>After doing some research about the flexbox there a lot of information that should be considered because this is not a single property is a complete tool that involves a whole set of properties, which some of them are meant to be set on the primary container, also called as parent element or well known as "flex container", whereas there are some others that are set for the children element also called as "flex items". Meaning that the “regular” layout that we learned in the previous Web Authoring 110 that was based in a layout based on blovks and inline flow directions. Now the flex layout will be based on: </p>

<ul>
<li><strong>Main axis</strong> – this property of a flex container it is the primary axis along which flex items are laid out. We need to understand that it is not necessarily horizontal; this will depends on the flex-direction property. </li>

<li><strong>Main-start | Main-end</strong> - The flex items are set within the container. Starting from main-start and going to main-end. </li>

<li><strong>Main size.</strong> - The width or the height of a flex item, this would depend of the main element.  </li>

<li><strong>Cross axis</strong> – This element is perpendicular to the main axis and it is called the cross axis. The direction of this element depends on the main axis direction. </li>

<li><strong>Cross-start | cross-end</strong> – This elements are flex lines filled with items and placed into the container starting on the cross-start side of the flex container and going toward the cross-end side. </li>

<li><strong>Cross size</strong> – This element has a size property whichever of ‘width’ or ‘height’ it is in the cross dimension. </li>
    
</ul>

<p><strong>Citing Sources: </strong></p> 

<p>The Flexbox is a tool “most appropriate to the components of an application, and small-scale layouts, while the Grid layout is intended for larger scale layouts.” according to CSS-tricks. In my opinion this tool could be really useful because can help it for a lot of responsive websites. It will be easier to handle the items to see correctly without getting worried about the size of the screen that the end user will see because this tool will have a main start and a main end, as well as a cross start and a cross end giving us all the flexibility to handle correctly the site with their items. </p>

<p>The flexbox have a lot of elements and properties because this will be the big container of several items. This is a very important element that we need to understand correctly because “every HTML element that’s a direct child of a flex container is an “item”. Flex items can be manipulated individually, but for the most part, it’s up to the container to determine their layout.” This was mention on the website Internet is hard by an Anonymous user. This knowledge can be hard to get until we start manipulating the elements of the items; however the theory its necessary to understand it because once we modify the items we can see exactly what is happening and see the power of this element.  </p>

<p>When a developer want to stat coding a website with a flexbox container. It is very important that the developer understand how to set correctly the property, and that this property most be define within a main container in the HTML. The website Internet is Hard, mention that the “the first step in using flexbox is to turn one of our HTML elements into a flex container. We do this with the display property, by giving it a value of flex, we’re telling the browser that everything in the box should be rendered with flexbox instead of the default box model.” This is a basic start, but for someone that it is not so familiarized with this terminologies and properties could be a good point to understand. In my opinion the most important part to create a website using a flexbox is defining all the basic and obvious points.  </p>

 
<p><strong>Works Cited</strong></p> 

<p>“Flexbox layout is most appropriate to the components of an application, and small-scale layouts, while the Grid layout is intended for larger scale layouts.”  CSS TRIKS, <a href="https://css-tricks.com">https://css-tricks.com</a> </p>

<p>“Every HTML element that’s a direct child of a flex container is an “item”. Flex items can be manipulated individually, but for the most part, it’s up to the container to determine their layout. The main purpose of flex items are to let their container know how many things it needs to position.” Internet is hard, <a href="https://internetingishard.com/html-and-css/flexbox/"> https://internetingishard.com/html-and-css/flexbox/ </a></p>

<p>“The first step in using flexbox is to turn one of our HTML elements into a flex container. We do this with the display property, which should be familiar from the CSS Box Model chapter. By giving it a value of flex, we’re telling the browser that everything in the box should be rendered with flexbox instead of the default box model.” Internet is hard, <a href="https://internetingishard.com/html-and-css/flexbox/"> https://internetingishard.com/html-and-css/flexbox/ </a></p>

<p>The website should have the following information in the CSS file understanding that the HTML file have a div with a class “menu-container”: </p>

<img src="images/html_flexbox.png" alt="Source 1" width="60%"/>

<p>CSS</p>

<img src="images/css_flexbox.png" alt="Source 1" width="35%"/>

</section>
<!-- END LEFT COL -->


<?php include "includes/footer.php";?>