@props(['highlight' => false, 'message' => ''])
<div class="carousel-item">
    <div class="card bg-base-200 shadow-sm " @class([
        'mt-10' => !$highlight,
        'border' => !$highlight,
        'border-2' => $highlight,
        'border-primary' => $highlight,
        'border-base-300' => !$highlight,
    ])>
        <div class="card-body w-[360px] min-w-[300px] py-[47px] px-[31px]">

            <div class="tooltip tooltip-bottom tooltip-primary relative ">

                <!-- This is the floating tooltip content -->
                <div
                    class="tooltip-content absolute left-10 top-full p-5  shadow-lg rounded-lg text-justify z-500 bg-primary text-primary-content w-80">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa magnam amet saepe natus dolore
                        libero ducimus corporis iste cumque voluptas cupiditate voluptatum, suscipit expedita possimus
                        sint beatae eos ratione nam?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem dolorum veritatis iure,
                        consequuntur, totam assumenda accusamus architecto perspiciatis tempore nostrum delectus veniam
                        ullam qui fugiat at dolore quaerat, mollitia blanditiis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae distinctio fuga voluptatum odit
                        recusandae modi laudantium commodi nam sint voluptates? Eligendi iure odio nisi corporis magnam
                        optio quam similique itaque?</p>
                </div>

                <!-- This is the target that shows the tooltip -->
                <span class="underline underline-offset-4 decoration-dashed">Backup <b>weekly</b></span>
            </div>
        </div>
    </div>
</div>
