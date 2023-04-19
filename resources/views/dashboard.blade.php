<!-- ARBEIT MIT "SWITCH" UND NICHT "IF-ELSE-IF" -->

<x-app-layout>

    @if(Request::path() === "General_Events")


        
        @include('publications.publication')
        @php
            $_SESSION['event'] =  "General_Events";
        @endphp 

        
    @elseif(Request::path() === "Food_Events")

        
        @include('publications.publication')
        @php
            $_SESSION['event'] =  "Food_Events";
        @endphp 
         

    @elseif(Request::path() === "Pub_Events")
       
        @include('publications.publication')
        @php
            $_SESSION['event'] =  "Pub_Events"; 
        @endphp 
        

    @elseif(Request::path() === "Smalls_Events")
        
        @include('publications.publication')
        @php
            $_SESSION['event'] =  "Smalls_Events"; 
        @endphp 


    @elseif(Request::path() === "events")
    
        @include('publications.publication') 


    @elseif(Request::path() === "filter")
    
        @include('filterPublications') 

        
    @elseif(Request::path() === "yourEvents")
    
        @include('publications.yourEvents') 



        
        



    @elseif(Request::path() === "details/{$publicationsDetails->id}")
        
        @include('publications.partials.publicationDetails')


    @else

        @include('publications.partials.publicationEdit')
    @endif
    
</x-app-layout>
